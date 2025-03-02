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
use \DateTime;

if (!defined('CHECK_INDEX')):
	header($_SERVER['SERVER_PROTOCOL'] . ' 403 Direct access forbidden');
	exit('<!doctype html><html><head><meta charset="utf-8"><title>BEL-CMS : Error 403 Forbidden</title><style>h1{margin: 20px auto;text-align:center;color: red;}p{text-align:center;font-weight:bold;</style></head><body><h1>HTTP Error 403 : Forbidden</h1><p>You don\'t permission to access / on this server.</p></body></html>');
endif;

final class Secure
{
	public static function isMail ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_EMAIL) ? $data : false;
	}
	public static function isBool ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_BOOLEAN) ? $data : false;
	}
	public static function isInt ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_INT) ? $data : false;
	}
	public static function isfloat ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_FLOAT) ? $data : false;
	}
	public static function isIp ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_IP) ? $data : false;
	}
	public static function isUrl ($data = false)
	{
		return filter_var($data, FILTER_VALIDATE_URL) ? $data : false;
	}
	public static function isString($data = false)
	{
		return is_string($data) ? $data : false;
	}
	public static function validateDate($date, $format = 'Y-m-d H:i:s')
	{
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}
	public static function isDate($data = false)
	{
		return Secure::validateDate($data) ? $data : false;
	}
}
?>