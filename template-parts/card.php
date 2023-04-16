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
    <div>
        <?php if(get_field('nft_name')): ?>
            <p><?php echo $name_nft; ?></p>
        <?php endif; ?>  
    </div>
