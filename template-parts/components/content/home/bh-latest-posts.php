<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'category_name' => 'noticias'
];

$the_query = new WP_Query( $args);

?>
<section class="news">
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();
                $author = get_the_author();
                $date = get_the_date();
                $categories = get_the_category();
            ?>
                <article class="content">
                    <ul class="dest__card__tags tags tags--news dest__card__tags--news">
                        <?php
                        if ( ! empty( $categories ) ) {
                            echo '<a class="tags tags--news" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                        }
                        ?>
                    </ul>
                    <div class="content-overlay"></div>
                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                        <div class="content__info">
                            <ul class="meta">
                                <li class="meta__item meta__item--author"> <?= $author; ?> </li>
                                <li class="meta__item meta__item--date"> <?= $date; ?> </li>
                                <li class="meta__item meta__item--comments"> <?php echo get_comments_number($post->ID); ?> </li>
                            </ul>
                            <h2 class="content-title"><?= $title; ?></h2>
                        </div>
                        <div class="content-details fadeIn-bottom">
                            <div class="content-text">
                            <?php  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                            <a class="zoom-gallery" href="<?php the_permalink(); ?>">
                                    <img src="https://i.postimg.cc/5NCrq5nk/eye-1.png" alt="Eye">
                                </a>
                            </div>
                        </div>
                </article>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>