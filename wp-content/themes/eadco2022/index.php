<?php get_header(); ?>

<?php if ( is_front_page()) {
	 get_template_part('template-parts/home', get_post_type()); 
} else {
    get_template_part('template-parts/page', get_post_type()); 
}

// if (have_posts()) :
//     /* Start the Loop */
//     while (have_posts()) : the_post();

//         get_template_part('template-parts/home', get_post_type());

//     endwhile;

//     the_posts_pagination(array(
//         'prev_text' => '<i class="flaticon-back" aria-hidden="true"></i>',
//         'next_text' => '<i class="flaticon-next" aria-hidden="true"></i>',
//     ));

// else :
//     echo '2';
//     get_template_part('template-parts/page', 'none');

// endif;

?>


<?php get_footer(); ?>