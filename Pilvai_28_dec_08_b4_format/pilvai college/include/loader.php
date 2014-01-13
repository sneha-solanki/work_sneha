<?php
/**
 * Project:     SPMS
 * File:        loader.php
 *
 */

/** Start session */
session_start();
require_once('smarty_ajax.php');

/** Smarty configuration */
require_once('smarty/Smarty.class.php');
$t = new Smarty();
$t->debugging = false;
$t->force_compile = true;
$t->caching = false;
$t->compile_check = true;
$t->cache_lifetime = -1;
$t->template_dir = 'resources/templates';
$t->compile_dir = 'resources/templates_c';
$t->plugins_dir = array(
  SMARTY_DIR . 'plugins',
  'resources/plugins');

$t->assign('site_title', 'Pilavi Collage');

?>