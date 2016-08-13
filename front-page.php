<?php
/**
 * The template for displaying the front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sth
 * 
 * 
 * 
 * 
 */

get_header(); ?>

<div class="jumbotron" style="background-image: url('<?php echo CFS()->get( 'jumbotron_img' );?>')">
   <div class="container">
     
     <h1><?php echo CFS()->get( 'jumbotron_title' );?></h1>
     
     <p>
       <?php echo CFS()->get( 'jumbotron_subtitle' );?>
     </p>
     
     <p>
       <?php $jbo_link = CFS()->get( 'jumbotron_btn' );?>
       <a class="btn btn-primary btn-lg" href="<?php echo $jbo_link["url"];?>" title="<?php echo $jbo_link["text"];?>" target="<?php echo $jbo_link["target"];?>" role="button"><?php echo $jbo_link["text"];?></a>
     </p>
  </div>

</div>

	 <div id="primary" class="container">
    <div class="row">
      <main id="main" class="col-md-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      
	  </div><!-- #primary -->
  </div>

<?php get_footer(); ?>