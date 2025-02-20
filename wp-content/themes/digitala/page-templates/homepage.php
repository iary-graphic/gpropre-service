<?php
/*
 * Template Name: Front Page Template
 */
get_header();
?>
<?php digitala_theme()->get( 'front-page-content' )->render(); ?>

<?php get_footer();

