<?php get_header(); ?>

<?php echo  get_custom_logo();?>
<?php echo the_custom_logo();?>
<section class="hero-section">
<?php echo  get_custom_logo();?>
<?php echo the_custom_logo();?>
    <h1>Flexifix</h1>
    <h3>We are giving new life to all bicycles</h3>
    <p>
        Our bicycles are fixed thoroughly. patiently and most importantly
        with a lot of passion
    <p>
    
    <div class="hero-anchor flex">
        <a href="#"><img src="http://flexifix-backup.local/wp-content/uploads/2023/06/repairs.svg" alt="Repairs"></a>
        <a href="#"><img src="http://flexifix-backup.local/wp-content/uploads/2023/06/rental.svg" alt="Rental"></a>
        <a href="#"><img src="http://flexifix-backup.local/wp-content/uploads/2023/06/bicycles.svg" alt="Bicycles"></a>
    </div>

</section>

<section class="popular-products">

          <h2>NEW ARRIVALS - THE RIDE MUST GO ON!</h2>
          <p>Our bicycles are fixed thoroughly. patiently and most importantly with a lot of passion</p>
          <?php echo do_shortcode(' [products columns=3 limit=3]  ') ?>


        </section>
<!-- 
<h1><?php bloginfo("name") ?></h1>
<p><?php bloginfo("description") ?></p> -->

<?php 
    while(have_posts()){
        the_post();?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?> </p>
    <?php } 
?>
<div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('asstes\Blue iMac on the table in the modern classroom_Dizajn bez názvu (17).png') ?>);">
          

<?php 
    $name = "Simona";
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
      
<?php the_custom_logo();?>
      <?php
      // Start the Loop.
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content/content', 'page' );
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) {
          comments_template();
        }
      endwhile; // End the loop.
      ?>
    </main><!-- #main -->
  </div><!-- #primary -->

  <div id="google-reviews"></div>

<link rel="stylesheet" href="https://cdn.rawgit.com/stevenmonson/googleReviews/master/google-places.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/stevenmonson/googleReviews@6e8f0d794393ec657dab69eb1421f3a60add23ef/google-places.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCG-ABUhTwWa188G8ghk6EnZSwMGpStOc0&signed_in=true&libraries=places"></script>

<script>
jQuery(document).ready(function( $ ) {
   $("#google-reviews").googlePlaces({
        placeId: 'ChIJu8buXu4ySUYRht6mdBGN2Uo' //Find placeID @: https://developers.google.com/places/place-id
      , render: ['reviews']
      , min_rating: 4
      , max_rows:3
   });
});
</script>

<?php get_footer(); ?>