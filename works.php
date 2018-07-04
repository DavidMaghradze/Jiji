<?php
    get_header();
    /* Template Name: WorksPage */
?>
<main>
    <div id="works" class="container">
        <header class="main-header">
                <h2>ნამუშევრები</h2>
        </header>
        <div class="row">
            <?php
                $i=0;
                $reverse;
                $text;
                    $args=array(
                                'posts_per_page' => 12, 
                                'category_name' => 'works',      
                                // 'post_type' => 'my_custom_type'
                                // 'category__in' => array($cat_id),
                                );
                            $wpCats = new WP_Query( $args );
                    if ( $wpCats->have_posts() ) :
                        while ( $wpCats->have_posts() ):
                                $wpCats -> the_post();
                ?>
                <div class="col-md-6">
                    <section class="work">
                        <?php the_post_thumbnail() ?>
                        <div class="work-content">
                            <h3 class="work-content-header"><?php the_title() ?></h3>
                            <?php $content = get_the_content(''); echo mb_strimwidth($content, 0, 80, '...');?>
                            <a href="#">დეტალურად</a>
                        </div>
                    </section>
                </div>
                <?php
                        endwhile;
                    endif;s
                ?>
        </div>
</main>