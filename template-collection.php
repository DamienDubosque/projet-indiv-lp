<?php  /* Template Name: About the collection */ ?>

<?php get_header(); ?>


<div class="about-collection">
    <?php 
        $banner = get_field( 'image_banner_about_collection' ); 
        $img   = wp_get_attachment_image( $banner, 'full' );
        $chapo = get_field( 'chapo_header_about_collection' );
    ?> 
    <div class="about-collection__banner">
    <?php echo $img; ?>
    <div class="opacity"></div>
        <div class="about-collection__banner-content">
            <h1><?php the_title() ?></h1>
            <p><?php echo $chapo; ?></p>
        </div>
    </div>

    <?php 
        $title_about_me = get_field( 'title_about_me' ); 
        $text_about_me = get_field( 'text_about_me' );
    ?> 
    <div class="about-collection__about-me">
        <h2><?php echo $title_about_me; ?></h2>     
        <p><?php echo $text_about_me; ?></p>   
    </div>

    <div class="about-collection__roadmap">
        <h2>The Roadmap</h2>
        <?php if(have_posts()) : ?>
        <div class="about-collection__items">
            <?php while(have_posts()) : the_post(); 

                get_template_part('template-parts/roadmap-item', 'roadmap-item');

            endwhile; ?>
        </div>
        <?php endif ?>
    </div>

    <div class="front-page__nfts" style="margin-bottom: 100px"> 
        <h2>Discover the GLOW Collection</h2>
        <?php if(have_posts()) : ?>
        <div class="front-page__nfts-container">
            <?php while(have_posts()) : the_post(); 

                get_template_part('template-parts/card', 'card');
                
            endwhile; ?>
        </div>
        <?php endif ?>
    </div>
</div>

<?php get_footer(); ?>