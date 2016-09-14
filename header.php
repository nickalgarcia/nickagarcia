<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="../../images/favicon.ico">
    <title>Nick Garcia</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="../../css/simple-sidebar.min.css" rel="stylesheet">
    <link href="../../css/custom.min.css" rel="stylesheet">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:700|Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38153213-1', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body>
    <div id="wrapper">
    <h1 class="brand"><a href="../../">Nick Garcia</a></h1>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="../../">Home</a>
                </li>
                <li>
                    <a href="../../#about">About Me</a>
                </li>
                <li>
                    <a href="?page=portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="../../blog/">Blog</a>
                </li>
                <li>
                    <a href="?page=contact">Contact</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
        <div id="page-content-wrapper">
                    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>

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

				