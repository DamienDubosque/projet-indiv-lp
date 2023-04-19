<?php  /* Template Name: OFFF */ ?>

<?php get_header(); ?>

<div class="offf">
    <?php 
        $banner = get_field( 'image_banner_offf' ); 
        $img   = wp_get_attachment_image( $banner, 'full' );
        $chapo = get_field( 'chapo_header_offf' );
    ?> 
    <div class="offf__banner">
    <?php echo $img; ?>
    <div class="opacity"></div>
        <div class="offf__banner-content">
            <h1><?php the_title() ?></h1>
            <p><?php echo $chapo; ?></p>
        </div>
    </div>

    <div class="offf__expect">
    <?php 
        $expect = get_field( 'image_expect' ); 
        $img_expect   = wp_get_attachment_image( $expect, 'full' );
        $title_expect = get_field( 'title_expect' );
        $text_expect = get_field( 'text_expect' );

    ?> 
        <h2><?php echo $title_expect; ?></h2>
        <div class="offf__expect-content">
            <div><p><?php echo $text_expect; ?></p></div>
            
            <div class="offf__expect-img"><?php echo $img_expect; ?></div>
        </div>
    </div>

    <div class="offf__images">
    <?php 
        $offf = get_field( 'offf_image1' ); 
        $img_offf = wp_get_attachment_image( $offf, 'full' );
        $offf1 = get_field( 'offf_image2' ); 
        $img_offf1 = wp_get_attachment_image( $offf1, 'full' );
        $offf2 = get_field( 'offf_image3' ); 
        $img_offf2 = wp_get_attachment_image( $offf2, 'full' );

    ?> 
        <?php echo $img_offf; ?>
        <?php echo $img_offf1; ?>
        <?php echo $img_offf2; ?>
    </div>

    <div class="offf__hope">
    <?php 
        $hope = get_field( 'image_hope' ); 
        $img_hope   = wp_get_attachment_image( $hope, 'full' );
        $title_hope = get_field( 'title_hope' );
        $text_hope = get_field( 'text_hope' );

    ?> 
        <h2><?php echo $title_hope; ?></h2>
        <div class="offf__hope-content">
            <div><p><?php echo $text_hope; ?></p></div>
            
            <div class="offf__hope-img"><?php echo $img_hope; ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>