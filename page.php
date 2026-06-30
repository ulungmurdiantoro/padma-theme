<?php get_header(); ?>
<main id="main">

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="wrap">
    <div class="page-hero__inner">
      <span class="clause">&sect; <?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ?? 'Halaman' ); ?></span>
      <h1><?php the_title(); ?></h1>
    </div>
  </div>
</div>

<!-- CONTENT -->
<section class="sec">
  <div class="wrap">
    <div class="page-entry-content">
      <?php
      while ( have_posts() ) :
        the_post();
        the_content();
      endwhile;
      ?>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
