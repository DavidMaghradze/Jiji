<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <title></title>
</head>
<body>
    <main>
        <div id="catalog" class="container-fluid">
            <header class="main-header">
                <h2>კატალოგი</h2>
            </header>
            <div class="row no-gutters margin0">
                <div class="col-md-6">
                    <a href="#">
                        <section class="catalog-item catalog-item-large">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic.jpg" alt="">
                            <h3 class="catalog-item-header">რბილი ავეჯი</h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="#">
                        <section class="catalog-item catalog-item-medium">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic.jpg" alt="">
                            <h3 class="catalog-item-header">რბილი ავეჯი</h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                    <a href="#">
                        <section class="catalog-item catalog-item-small">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic.jpg" alt="">
                            <h3 class="catalog-item-header">რბილი ავეჯი</h3>
                            <div class="catalog-inner"></div>
                        </section>
                    </a>
                    <a href="#">
                        <section class="catalog-item catalog-item-small">
                            <img src="<?php bloginfo('template_url')?>/images/catalog-pic.jpg" alt="">
                            <h3 class="catalog-item-header">რბილი ავეჯი</h3>
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