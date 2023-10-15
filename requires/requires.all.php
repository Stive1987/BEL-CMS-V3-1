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

if (!defined('CHECK_INDEX')):
	header($_SERVER['SERVER_PROTOCOL'] . ' 403 Direct access forbidden');
	exit('<!doctype html><html><head><meta charset="utf-8"><title>BEL-CMS : Error 403 Forbidden</title><style>h1{margin: 20px auto;text-align:center;color: red;}p{text-align:center;font-weight:bold;</style></head><body><h1>HTTP Error 403 : Forbidden</h1><p>You don\'t permission to access / on this server.</p></body></html>');
endif;

################################################
# Fichiers principaux en inclusion
################################################
$files = array(
	ROOT.DS.'core'.DS.'class.error.php',
	ROOT.DS.'core'.DS.'class.debug.php',
	ROOT.DS.'requires'.DS.'constant.php',
	ROOT.DS.'config'.DS.'config.pdo.php',
	ROOT.DS.'core'.DS.'class.secure.php',
	ROOT.DS.'core'.DS.'class.belcms.php',
);
foreach ($files as $include) {
	require_once $include;
}