<?php 
$pageTitle = 'Nick Garcia';
$pageDescription = 'This is the homepage';
?>

<?php
include 'header.php';
?>

<div class="row">
	<div class="col-lg-7 col-md-7 col-sm-7">
		<div class="homepage-back">
			<a href="#about"><img src="/images/about.png" alt="About Me"><div class="photo-overlay"><h3>About Me</h3></div></a>
		</div>
	</div>
	<div class="col-lg-5 col-md-5 col-sm-5">
		<div class="top homepage-back">
			<a href="../../portfolio/"><img src="/images/portfolio.jpg" alt="Portfolio"><div class="photo-overlay"><h3>Portfolio</h3></div></a>
		</div>
		<div class="bottom homepage-back"><a href="../../blog/"><img src="/images/blog.jpg" alt="My Blog"><div class="photo-overlay"><h3>Blog</h3></div></a>
		</div>
	</div>
</div>
												
<?php
include 'about.php';
?>


