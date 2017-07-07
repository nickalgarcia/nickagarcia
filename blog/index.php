<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once dirname(__FILE__) . '../../header.php';
require_once dirname(__FILE__) . '../../footer.php';
?>

<?php
require('./wp-blog-header.php');
?>

<div class="container">
<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>

<div class="row">
<div class="col-lg-12">
<h1><?php the_title(); ?></h1> 
<div class="date"><?php the_date(); echo "<br />"; ?></div>
<?php the_content(); ?> 
</div>
</div>

<?php
endforeach;
?>
</div>