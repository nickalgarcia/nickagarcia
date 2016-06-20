<?php
error_reporting(E_ALL & ~E_NOTICE);
//require_once('header.php');
require_once dirname(__FILE__) . '/header.php';
require_once(basename(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php'));
require_once dirname(__FILE__) . '/footer.php';
?>