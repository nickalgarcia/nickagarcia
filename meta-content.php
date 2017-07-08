
<?php
// Define variables for SEO
$pageTitle = '';
$pageDescription = '';


$fileName = basename(__FILE__);
switch($fileName){
  case 'about.php':
    $pageTitle = 'About';
	$pageDescription = '$pageDescription';
    break;
  case 'anotherpage.php':
    echo '<link .... src="another_stylesheet_file.css" />';
    break;
}
?>