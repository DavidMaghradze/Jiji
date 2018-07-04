<?php
    get_header();
?>
    <div id="header-carousel" class="carousel slide" data-ride="ride">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
            <li data-target="#header-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <?php
                $args=array(
						    'posts_per_page' => 4, 
						    'category_name' => 'slider',      
						    // 'post_type' => 'my_custom_type'
						    // 'category__in' => array($cat_id),
							);
                           $wpCats = new WP_Query( $args );
                   if ( $wpCats->have_posts() ) :
                       while ( $wpCats->have_posts() ):
	                       	$wpCats -> the_post();
            ?>
            <div class="carousel-item" style="background-image: url('<?php the_post_thumbnail_url()?>')">
                <section class="carousel-item-content">
                        <h2><?php the_title()?></h2>
                        <p><?php the_content('')?></p>
                        <a href="#" class="more-button">იხილეთ მეტი</a>
                </section>
            </div>
            <?php 
				     endwhile;
				 endif;
			?>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#header-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <main>
        <div id="about" class="container">
            <header class="main-header">
                <h2>ჩვენ შესახებ</h2>
            </header>
            <div class="row">
                <div class="about-img col-md-8">
                    <img src="<?php bloginfo('template_url')?>/images/about-img.png">
                </div>
                <div class="col-md-4">
                    <div class="about-content">
                        <p>
                        Lorem ipsum dolor sit amet, ad eos simul contentiones. Timeam prompta meliore mei id. Ut qui autem regione antiopam, vivendo deterruisset ex per. Pri eu luptatum facilisis, in paulo antiopam erroribus pri.
                        </p>
                        <a href="#" class="more-button">იხილეთ მეტი</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="catalog" class="container-fluid">
            <header class="main-header">
                <h2>კატალოგი</h2>
            </header>
            <div class="row no-gutters margin0">
                <div class="col-md-6">
                    <?php
                        $category_link = get_category_link(6);
                    ?>
                    <a href="<?php echo esc_url( $category_link ); ?>">
                        <section class="catalog-item catalog-item-large">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic.jpg" alt="">
                            <h3 class="catalog-item-header"><?php echo get_cat_name(6) ?></h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                </div>
                <div class="col-md-6">
                    <?php
                        $category_link = get_category_link(9);
                    ?>
                    <a href="<?php echo esc_url( $category_link ); ?>">
                        <section class="catalog-item catalog-item-medium">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic2.jpg" alt="">
                            <h3 class="catalog-item-header"><?php echo get_cat_name(9) ?></h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                    <?php
                        $category_link = get_category_link(8);
                    ?>
                    <a href="<?php echo esc_url( $category_link ); ?>">
                        <section class="catalog-item catalog-item-small">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic3.jpg" alt="">
                            <h3 class="catalog-item-header"><?php echo get_cat_name(8) ?></h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                    <?php
                        $category_link = get_category_link(7);
                    ?>
                    <a href="<?php echo esc_url( $category_link ); ?>">
                        <section class="catalog-item catalog-item-small">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic4.jpg" alt="">
                            <h3 class="catalog-item-header"><?php echo get_cat_name(7) ?></h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                </div>
            </div>
        </div>
        <div id="services" class="container">
            <header class="main-header">
                <h2>სერვისები</h2>
            </header>
            <div class="row">
                <div class="col-md-3">
                    <section class="services-item">
                        <img src="<?php bloginfo('template_url')?>/images/services-icon1.png" alt="">
                        <h4 class="services-item-text">რესტავრაცია</h4>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="services-item">
                        <img src="<?php bloginfo('template_url')?>/images/services-icon2.png" alt="">
                        <h4 class="services-item-text">დამზადება</h4>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="services-item">
                        <img src="<?php bloginfo('template_url')?>/images/services-icon1.png" alt="">
                        <h4 class="services-item-text">რესტავრაცია</h4>
                    </section>
                </div>
                <div class="col-md-3">
                    <section class="services-item">
                        <img src="<?php bloginfo('template_url')?>/images/services-icon2.png" alt="">
                        <h4 class="services-item-text">დამზადება</h4>
                    </section>
                </div>
            </div>
        </div>
        <div id="works">
            <header class="main-header">
                <h2>ნამუშევრები</h2>
            </header>
            <div class="works-container">
                <div class="works-item">
                    <img src="<?php bloginfo('template_url')?>/images/work1.jpg" alt="">
                    <header class="works-item-text">
                        <h4>დამატებითი ინფორმაცია</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </header>
                </div>
                <div class="works-item">
                    <img src="<?php bloginfo('template_url')?>/images/work2.jpg" alt="">
                    <header class="works-item-text">
                        <h4>დამატებითი ინფორმაცია</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </header>
                </div>
                <div class="works-item">
                    <img src="<?php bloginfo('template_url')?>/images/work3.jpeg" alt="">
                    <header class="works-item-text">
                        <h4>დამატებითი ინფორმაცია</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </header>
                </div>
                <div class="works-item">
                    <img src="<?php bloginfo('template_url')?>/images/work4.jpg" alt="">
                    <header class="works-item-text">
                        <h4>დამატებითი ინფორმაცია</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </header>
                </div>
                <div class="more-item">
                    <section class="more-item-article">
                        <span>+</span>
                        <h4 class="more-item-text">იხილეთ ყველა ნამუშევარი</h4>
                    </section>
                </div>
            </div>
        </div>
        <div class="container"></div>
    </main>
    <script>
        dropdown
        var menuItem = document.querySelector('#menu-item-38');
        var dropdown = document.querySelector('.dropdown')
        menuItem.addEventListener('mouseenter', ()=>{
            dropdown.style.display='flex';
        });

        dropdown.addEventListener('mouseleave', ()=>{
            dropdown.style.display='none';
        });

        var catItems = document.querySelectorAll('.cat-item');
        console.log(catItems);

        catItems.forEach((item, index)=>{
            var i = document.createElement('i');
            i.className="fa fa-arrow-right";
            var a = catItems[index].children[0];
            console.log(a);
           catItems[index].insertBefore(i,a);
        });

        // Slider
        var firstSlide = document.querySelectorAll('.carousel-item');
        firstSlide[0].className+=' active';

        var items = document.querySelectorAll('.works-item');
        items.forEach((itme, index)=>{
            items[index].addEventListener('mouseover', ()=>{
                items[index].style.width="50%";
            });

            items[index].addEventListener('mouseout', ()=>{
                items[index].style.width="25%";
            });
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>