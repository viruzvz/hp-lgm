<?php get_header(); ?>



<?php
if (have_posts()): 
	while (have_posts()) : the_post(); ?>

	<article class='post'>
	      <?php the_content(); ?>
	</article>

	<?php endwhile;
	else :
		echo '<p>post nao encontrado</p>';
	endif;

?>

<?php get_footer(); ?>