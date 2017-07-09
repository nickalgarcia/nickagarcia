
<?php
// Define variables for SEO
$pageTitle = '';
$pageDescription = '';


$fileName = basename(__FILE__);
switch($fileName){
  case 'about.php':
    $pageTitle = 'About';
	$pageDescription = 'This is a test';
    break;
  case 'portfolio/home.php':
    $pageTitle = 'Portfolio';
	$pageDescription = 'This is a test';
    break;
}
?>