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
    <?php 
        $title_roadmap = get_field( 'title_roadmap' );
    ?>
        <h2><?php echo $title_roadmap ?></h2>
        <?php if(have_posts()) : ?>
        <div class="about-collection__items">
            <?php while(have_posts()) : the_post(); 

                get_template_part('template-parts/roadmap-item', 'roadmap-item');

            endwhile; ?>
        </div>
        <?php endif ?>
    </div>

    <div class="front-page__nfts"> 
    <?php 
        $title_glow = get_field( 'title_glow_collection' );
    ?>
        <h2><?php echo $title_glow ?></h2>
        <?php if(have_posts()) : ?>
        <div class="front-page__nfts-container">
            <?php while(have_posts()) : the_post(); 

                get_template_part('template-parts/card', 'card');
                
            endwhile; ?>
        </div>
        <?php endif ?>
    </div>

    <div class="front-page__nfts" style="margin-bottom: 100px"> 
    <?php 
        $title_motion = get_field( 'title_motion' );
        $text_motion = get_field( 'text_motion' );
        $video_nft_motion = get_field( 'video_nft' );
    ?>
        <h2><?php echo $title_motion ?></h2>
        <p class="motion-text"><?php echo $text_motion ?></p>
        <video controls><source src="<?php echo $video_nft_motion ?>"  type="video/mp4"></video>
    </div>
</div>

<?php get_footer(); ?>