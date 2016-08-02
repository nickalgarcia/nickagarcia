<?php
error_reporting(E_ALL & ~E_NOTICE);
define("SITE_ROOT", "/var/www/nickagarcia");

require_once(SITE_ROOT. '/header.php');
require_once(basename(($_GET['page']!='' ? $_GET['page'] : 'home') . '.php'));
require_once(SITE_ROOT. '/footer.php');
?>