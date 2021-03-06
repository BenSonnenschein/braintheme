<?php
/**
*
* Das Braintheme ist ein von 
* 
* @package braintheme
*
* 
* 
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="content">
			<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); 	?>
			<?php endwhile; ?>
			<?php rapspot_paging_nav(); ?>
			<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
    	<div class="sidebar">
         <?php get_sidebar(); ?>
		  </div>
		</div>
	</main>
</div>
<?php get_footer(); ?>
