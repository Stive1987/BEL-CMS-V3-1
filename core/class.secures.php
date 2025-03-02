<?php
/**
 * Bel-CMS [Content management system]
 * @version 3.0.0 [PHP8.2]
 * @link https://bel-cms.dev
 * @link https://determe.be
 * @license http://opensource.org/licenses/GPL-3.-copyleft
 * @copyright 2015-2023 Bel-CMS
 * @author as Stive - stive@determe.be
 */

namespace BelCMS\Core;
use BelCMS\PDO\BDD as BDD;
use BelCMS\Requires\Common as Common;
use BelCMS\User as Users;

if (!defined('CHECK_INDEX')):
	header($_SERVER['SERVER_PROTOCOL'] . ' 403 Direct access forbidden');
	exit('<!doctype html><html><head><meta charset="utf-8"><title>BEL-CMS : Error 403 Forbidden</title><style>h1{margin: 20px auto;text-align:center;color: red;}p{text-align:center;font-weight:bold;</style></head><body><h1>HTTP Error 403 : Forbidden</h1><p>You don\'t permission to access / on this server.</p></body></html>');
endif;

final class Secures
{
	#########################################
	# Accès au page via les groupes
	#########################################
	public static function getAccessPage ($page = null)
	{
		if ($page === null) {
			return false;
		} else {
			$bdd = self::accessSqlPages($page);
			if (isset($bdd[$page]->access_groups)) {
				if (in_array(0, $bdd[$page]->access_groups)) {
					return true;
				} else {
					if ($_SESSION['USER']['HASH_KEY']) {
						foreach ($bdd[$page]->access_groups as $k => $v) {
							$user = self::accessSqlUser();
							$user = $user[$_SESSION['USER']['HASH_KEY']];
							$access = $user->access ? $user->access : array(0);
							if (isset($_SESSION['USER']['HASH_KEY']) && strlen($_SESSION['USER']['HASH_KEY']) == 32) {
								if (in_array(1, $access)) {
									return true;
									break;
								}
								if (in_array($v, $access)) {
									return true;
									break;
								} else {
									return false;
								}
							}
						}
					}
				}
			} else {
				return true;
			}
		}
	}
	#########################################
	# Accès au page admin via les groupes
	#########################################
	public static function getAccessPageAdmin ($page = null)
	{
		if ($page === null) {
			return false;
		} else {
			$bdd = self::accessSqlPages($page);
			if (isset($bdd[$page]->access_admin)) {
				if (in_array(0, $bdd[$page]->access_admin)) {
					return true;
				} else {
					foreach ($bdd[$page]->access_admin as $k => $v) {
						$user = self::accessSqlUser();
						$access = $user->access;
						if (isset($_SESSION['USER']['HASH_KEY']) && strlen($_SESSION['USER']['HASH_KEY']) == 32) {
							if (in_array(1, $access)) {
								return true;
								break;
							}
							if (in_array($v, $access)) {
								return true;
								break;
							} else {
								return false;
							}
						}
					}
				}
			} else {
				return true;
			}
		}
	}
	#########################################
	# Accès au widgets via les groupes
	#########################################
	public static function getAccessWidgets ($Widget = null)
	{
		if ($Widget === null) {
			return false;
		} else {
			$bdd = self::accessSqlWidget($Widget);
			if (in_array(0, $bdd[$Widget]->groups_access)) {
				return true;
			} else {
				foreach ($bdd[$Widget]->groups_access as $k => $v) {
					$user   = self::accessSqlUser();
					$user   = $user[$_SESSION['USER']['HASH_KEY']];
					$access = $user->access;
					if (isset($_SESSION['USER']['HASH_KEY']) && strlen($_SESSION['USER']['HASH_KEY']) == 32) {
						if (in_array($v, $access)) {
							return true;
							break;
						} else {
							return false;
						}
					} else {
						return false;
					}
				}
			}
		}
	}
	#########################################
	# Accès aux page si activer
	#########################################
	public static function getPageActive ($page) 
	{
		$bdd = self::accessSqlPages($page);
		if (isset($bdd[$page]->active)) {
			if ($bdd[$page]->active == 1) {
				return true;
			} else {
				return false;
			}
		} else {
			return true;
		}
	}
	#########################################
	# Accès aux widgets si activer
	#########################################
	public static function getwidgetsActive ($widgets) 
	{
		$bdd = self::accessSqlWidget($widgets);
		if ($bdd[$widgets]->active == 1) {
			return true;
		} else {
			return false;
		}
	}
	#########################################
	# BDD Complet de la page demandé
	#########################################
	public static function accessSqlPages ($name)
	{
		$sql = New BDD();
		$sql->table('TABLE_PAGES_CONFIG');
		$sql->where(array('name' => 'name', 'value' => $name));
		$sql->queryAll();
		if (empty($sql->data)) {
			$return = false;
		} else {
			$return = $sql->data;
			foreach ($return as $k => $v) {
				$return[$v->name] = $v;
				$return[$v->name]->access_groups = explode('|', $return[$v->name]->access_groups);
				$return[$v->name]->access_admin  = explode('|', $return[$v->name]->access_admin);
				if (!empty($v->config)) {
					$return[$v->name]->config = Common::transformOpt($return[$v->name]->config);
				} else {
					unset($return[$v->name]->config);
				}
				unset($return[$k], $return[$v->name]->name);
			}
		}
		return $return;
	}
	#########################################
	# BDD Complet du widget demandé
	#########################################
	public static function accessSqlWidget ($name)
	{
		$sql = New BDD();
		$sql->table('TABLE_WIDGETS');
		$sql->where(array('name' => 'name', 'value' => $name));
		$sql->queryAll();
		if (empty($sql->data)) {
			$return = false;
		} else {
			$return = $sql->data;
			foreach ($return as $k => $v) {
				$return[$v->name] = $v;
				$return[$v->name]->groups_access = explode('|', $return[$v->name]->groups_access);
				$return[$v->name]->groups_admin  = explode('|', $return[$v->name]->groups_admin);
				unset($return[$k], $return[$v->name]->name);
			}
		}
		return $return;
	}
	#########################################
	# Accès uniquement aux groupes et au 
	# groupe principal (assemblé) 
	# securisé par le hash_key
	#########################################
	public static function accessSqlUser () : object
	{
		$return = (object) array();

		if (isset($_SESSION['USER']['HASH_KEY']) and strlen($_SESSION['USER']['HASH_KEY']) == 32) {
			$sql = New BDD();
			$sql->table('TABLE_USERS');
			$sql->where(array('name' => 'hash_key', 'value' => $_SESSION['USER']['HASH_KEY']));
			$sql->fields(array('hash_key', 'groups', 'main_groups'));
			$sql->isObject(true);
			$sql->queryOne();
			if (empty($sql->data)) {
				$return = false;
			} else {
				$return->groups      = array(0 => $sql->data->groups);
				$return->main_groups = explode('|', $sql->data->main_groups);
				$return->access      = array_merge($return->groups, $return->main_groups);
				$return->access      = array_unique($return->access);
				unset($return->groups, $return->main_groups);
			}
		}

		return $return;
	}
	#########################################
	# retourne tout les groupes
	# et possible de retourné un seul
	#########################################
	public static function getGroups ($group = null) : array
	{
		$sql = New BDD;
		$sql->table('TABLE_GROUPS');
		$sql->fields(array('name', 'id_group'));
		$sql->queryAll();
		$data = $sql->data;

		if ($group != null) {
            $return = null;
			return $return[$group];
		} else {
			foreach ($data as $k => $v) {
				$return[$v->id_group] = $v->name;
			}
			return $return;
		}
	}

	public static function IsAcess ($data = null) : bool
	{
		$return = (bool) false;

		if ($data == null or $data == 0) {
			return (bool) true;
		}

		$g = explode('|', $data);
		if (in_array(0, $g)) {
			return (bool) true;
		}
	}
}