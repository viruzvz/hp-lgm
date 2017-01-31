<?php
get_header();

if (have_posts()): 
	while (have_posts()) : the_post(); ?>





    <div class="carousel spacer-lg">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-center">
              <h1 class="header-default"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>

	<div class="container">
	  <div class="row">
	    <article class='col-md-12'>
	      <?php the_content(); ?>
	    </article>
          </div>
        </div>




	<?php endwhile;
	else :
		echo '<p>post nao encontrado</p>';
	endif;

get_footer();
?>
