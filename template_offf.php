<?php  /* Template Name: OFFF */ ?>

<?php get_header(); ?>

<div class="offf">
    <?php 
        $banner = get_field( 'image_banner_offf' ); 
        $img   = wp_get_attachment_image( $banner, 'full' );
        $subheading = get_field( 'subheading_header_offf' );
        $chapo = get_field( 'chapo_header_offf' );
    ?> 
    <div class="offf-banner">
    <?php echo $img; ?>
        <div class="offf__banner-content">
            <h1><?php the_title() ?></h1>
            <h4><?php echo $subheading; ?></h4>
            <p><?php echo $chapo; ?></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>