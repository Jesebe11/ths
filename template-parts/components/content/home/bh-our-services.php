<?php

$args = [
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => 6,
    'category_name' => 'servicios'
];

$the_query = new WP_Query( $args);

?>
    <?php
        get_template_part( 'template-parts/components/common/titles/titles' , '' , ['title' => '<span>Nuestros</span>&nbsp servicios' , 'permalink' => '  '] );
    ?>
<section class="services">

        <?php if( $the_query->have_posts() ) : ?>
            <?php while( $the_query->have_posts() ) :
                $the_query->the_post();
                $title = get_the_title();

            ?>
                <article class="card">

                    <h2 class="content-title"><?= $title; ?></h2>

                    <?= get_the_post_thumbnail( $post->ID, 'medium', array('class' => 'content-image') ); ?>
                    <a class="zoom-gallery" href="<?php the_permalink(); ?>"></a>
                            <div class="content-text">
                                <?php  echo '<p class="excerpt">' . get_the_excerpt() . '</p>'; ?>
                            </div>
                </article>


<?php endwhile;
            wp_reset_postdata();
        endif; ?>
</section>