<?php get_header(); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li><?php the_title(); ?></li>
        </ol>
        <h2><?php the_title(); ?></h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      

        <?php the_content(); ?>
      
      </div>
    </section>

  </main><!-- End #main -->

<?php get_footer(); ?>