<?php
        // Récupérer les publications personnalisées "mon_custom_post_type"
        $args = array(
            'post_type' => 'step_roadmap',
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
                $left_image = get_field( 'left_image', $post_id );
                $left_img   = wp_get_attachment_image( $left_image, 'full' );
                $right_image = get_field( 'right_image', $post_id );
                $right_img   = wp_get_attachment_image( $right_image, 'full' );
                $title = get_field( 'title' );
                $text = get_field( 'text' );
                // Afficher le titre de la publication et la valeur du champ personnalisé
                
                echo "<div class='about-collection__item'>";
                    echo "<div class='about-collection__dots'></div>";
                    echo "<h4 class='about-collection__title'>" . $title . "</h4>";
                    echo "<div class='about-collection__content'>";
                        echo "<p>" . $text . "</p>";
                        echo "<div class='about-collection__roadmap-images'>";
                            echo $left_img;
                            echo $right_img;
                        echo "</div>";
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