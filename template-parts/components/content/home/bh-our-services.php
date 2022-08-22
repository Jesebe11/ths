<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 6,
    'category_name' => 'servicios'
];

$the_query = new WP_Query( $args);

?>
<section class="services">

    <?php
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Nuestros</span>&nbsp servicios' , 'permalink' => '  '] );
    ?>
        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();

            ?>
                <article class="content">

                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                    <a class="zoom-gallery" href="<?php the_permalink(); ?>">
                        <h2 class="content-title"><?= $title; ?></h2>
                    </a>

                            <div class="content-text">
                                <?php  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                            </div>
                </article>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>