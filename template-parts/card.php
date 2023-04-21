<?php
        // Récupérer les publications personnalisées "mon_custom_post_type"
        $args = array(
            'post_type' => 'nft',
            'posts_per_page' => -1, // Afficher toutes les publications
            'orderby' => 'date',
            'order' => 'ASC',
        );
        $query = new WP_Query( $args );

        // Si des publications sont trouvées
        if ( $query->have_posts() ) {
            // Boucle while pour parcourir chaque publication
            while ( $query->have_posts() ) {
                $query->the_post();

                $post_id = get_the_id();
                $nft = get_field( 'nft', $post_id );
                $collection_nft = get_field( 'collection_name' );
                $name_nft = get_field( 'nft_name' );
                $author_nft = get_field( 'author' );
                $buy_text_nft = get_field( 'buy_text' );
                $price_nft = get_field( 'price' );
                $text_button_nft = get_field( 'text_button' );
                $link_nft = get_field( 'link_url' );
                // Afficher le titre de la publication et la valeur du champ personnalisé
                echo "<div class='front-page__nfts-card'>";

                echo "<div class='front-page__nfts-img'>";
                    echo '<img src="' . $nft['url'] . '">';
                echo "</div>";

                echo "<div class='front-page__nfts-title'>";
                    echo '<p>' . $collection_nft . '</p>';
                    echo '<p>' . $name_nft . '</p>';
                echo "</div>";
                
                echo '<p>' . $author_nft . '</p>';
                    echo "<div class='front-page__nfts-bid'>";
                        echo "<div>";
                        echo '<p>' . $buy_text_nft . '</p>';
                        echo '<p>' . $price_nft . '</p>';
                        echo "</div>";
                        echo '<a href="' . $link_nft . '">' . $text_button_nft . '</a>';
                    echo "</div>";

                echo "</div>";
            }
            // Réinitialiser la requête après la boucle
            wp_reset_postdata();
        } else {
            // Aucune publication trouvée
            echo 'Aucune publication trouvée.';
        }
?>