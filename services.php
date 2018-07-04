<?php
    get_header();
    /* Template Name: ServicesPage */
?>
<main>
    <div id="services" class="container">
        <header class="main-header">
                <h2>სერვისები</h2>
        </header>
        <?php
            $i=0;
            $reverse;
            $text;
                $args=array(
						    'posts_per_page' => 4, 
						    'category_name' => 'services',      
						    // 'post_type' => 'my_custom_type'
						    // 'category__in' => array($cat_id),
							);
                           $wpCats = new WP_Query( $args );
                   if ( $wpCats->have_posts() ) :
                       while ( $wpCats->have_posts() ):
	                       	$wpCats -> the_post();
            ?>
        <div class="<?php $i%2==0 ? $reverse="" : $reverse="flex-row-reverse" ?>row align-items-center mb-5 <?php echo $reverse ?>">
            <div class="col-md-3">
                <div class="services-image">
                    <?php the_post_thumbnail('medium') ?>
                </div>
            </div>
            <div class="col-md-9">
                <section class="<?php $i%2==0 ? $text="text-left" : $text="text-right" ?> services-content <?php echo $text ?>">
                    <h2 class="services-content-header"><?php the_title()?></h2>
                    <?php the_content()?>
                </section>
            </div>
        </div>
        <?php
                $i++;
                endwhile;
            endif;
        ?>
    </div>
</main>