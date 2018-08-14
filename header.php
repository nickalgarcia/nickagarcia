<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage nickagarcia
 * @since nickagarcia 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <?php
$homepage = "/";
$currentpage = $_SERVER['REQUEST_URI'];
$page = $_SERVER['REQUEST_URI']; 
$page = str_replace('/', '', $page); 
$page = str_replace('.php', '', $page); 
$page = str_replace('?page=', '', $page); 
$page = $page ? $page : 'home';
if ($homepage==$currentpage): ?>
<title><?php echo $pageTitle ?></title>
<?php else: ?>
  <title><?php echo $pageTitle ?> | Nick Garcia</title>
<?php endif; ?>

<meta name="description" content="<?php echo $pageDescription ?>"/>

    <meta property="og:title" content="<?php echo $OGpageTitle ?>" />
<meta property="og:url" content="<?php echo $OGpageUrl ?>" />
<meta property="og:image" content="<?php echo $OGpageImage ?>" />
<meta property="og:description" content="<?php echo $OGpageDescription ?>" />

    <link rel="icon" href="../../images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <!--<link href="../../css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="../../css/custom.min.css" rel="stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400,700|Open+Sans:400,700" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta name="p:domain_verify" content="b2cd55ca5813ba564c3284d8d9e37284"/>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38153213-1', 'auto');
  ga('send', 'pageview');

</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=624608747677421';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div id="wrapper">
     <button type="button" class="btn-menu navbar-toggle collapsed" data-toggle="modal" data-target="#menuModal">MENU</button>
    <h1 class="brand"><a href="../../">Nick Garcia</a></h1>

        <!-- FULLSCREEN MODAL CODE (.fullscreen) -->
    <div class="modal fade fullscreen" id="menuModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body text-center">
                <button type="button" class="close btn btn-link" data-dismiss="modal" aria-hidden="true">X</button>
                    <ul>
                        <li><a href="../../">Home</a></li>
                        <li><a href="../../?page=about">About Me</a></li>
                        <li><a href="../../portfolio">Portfolio</a></li>
                        <li><a href="../../?page=playlist">Verse of the Day</a></li>
                        <li><a href="../../blog/">Blog</a></li>
                        <li><a href="../../contact">Contact</a></li>
                    </ul>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.fullscreen -->

                <!-- Page Content -->
        <div id="page-content-wrapper">

          <?php
          $homepage = "/";
          $currentpage = $_SERVER['REQUEST_URI'];
					$page = $_SERVER['REQUEST_URI']; 
					$page = str_replace('/', '', $page); 
					$page = str_replace('.php', '', $page); 
					$page = str_replace('?page=', '', $page); 
					$page = $page ? $page : 'home';
					if($homepage==$currentpage) {
          $container = 'container-fluid mainContent';
					}
					else {
					$container = 'container';
					}
					?>
					<div class="<?php echo $container ?>" id="<?php echo $page ?>">
					<div class="row">
                    <div class="col-lg-12">

				