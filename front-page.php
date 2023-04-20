<?php get_header(); ?>

<?php 
        $banner = get_field( 'image_banner_home' ); 
        $img   = wp_get_attachment_image( $banner, 'full' );
        $subheading = get_field( 'subheading_header_home' );
        $chapo = get_field( 'chapo_header_home' );
        $button = get_field( 'button_header_home' );
    ?> 

<div class="front-page">
    <div class="front-page__banner">   
    <?php echo $img; ?>
        <div class="front-page__banner-content">
            <h1><?php the_title() ?></h1>
            <h4><?php echo $subheading; ?></h4>
            <p><?php echo $chapo; ?></p>
            <a href="/"><?php echo $button; ?></a>
        </div>
    </div>
    <?php 
        $nft = get_field( 'nft' ); 
        $img_nft   = wp_get_attachment_image( $nft, 'full' );
        $collecton_nft = get_field( 'collection_name' );
        $name_nft = get_field( 'nft_name' );
        $author_nft = get_field( 'author' );
        $buy_text_nft = get_field( 'buy_text' );
        $price_nft = get_field( 'price' );
        $link_nft = get_field( 'link_url' );
    ?> 

    
    <div class="front-page__nfts"> 
        <h2>Discover the GLOW Collection</h2>
        <?php if(have_posts()) : ?>
        <div class="front-page__nfts-container">
            <?php while(have_posts()) : the_post(); 

                get_template_part('template-parts/card', 'card');
                
            endwhile; ?>
        </div>
        <?php endif ?>
    </div>
    

    <div class="front-page__collection">
    <?php 
        $title_collection = get_field( 'title_collection' );
        $text_collection = get_field( 'text_collection' );
        $button_collection = get_field( 'button_collection' );
    ?> 
        <h2><?php echo $title_collection; ?></h2>
        <p><?php echo $text_collection; ?></p>
        <a href="/"><?php echo $button_collection; ?></a>
    </div>

    <div class="front-page__offf">
    <?php 
        $offf = get_field( 'image_offf' ); 
        $img   = wp_get_attachment_image( $offf, 'full' );
        $title_offf = get_field( 'title_offf' );
        $text_offf = get_field( 'text_offf' );
        $button_offf = get_field( 'button_offf' );
    ?> 
        <h2><?php echo $title_offf; ?></h2>
        <div class="front-page__offf-container">
        <div class="front-page__offf-img"><?php echo $img; ?></div>
            <div class="front-page__offf-content">
                <p><?php echo $text_offf; ?>
                </p>
                <a href="/"><?php echo $button_offf; ?></a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>