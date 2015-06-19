<?php
//include("header.php");
get_header();
?>
<?php


if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php 
echo "<h1>";
the_title();
echo "</h1>";
the_content();
?>
<?php
endwhile;
endif;
?>

<?php
//include("footer.php");
get_footer();
?>