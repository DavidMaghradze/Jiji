<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/style.css">
    <title></title>
</head>
<body>
    <header>
        <div id="navbar">
            <div class="container position-relative">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <a href="http://localhost/jiji/" class="logo">
                            <img src="<?php bloginfo('template_url')?>/images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <?php wp_nav_menu('header-menu') ?>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="dropdown-item">
                        <h1 class="dropdown-item-title"><?php echo get_cat_name(6) ?></h1>
                        <ul class="dropdown-item-menu">
                            <?php wp_list_categories( array(
                                'orderby'            => 'id',
                                'show_count'         => false,
                                'use_desc_for_title' => false,
                                'child_of'           => 6,
                                'title_li'            => ''
                            ) ); 
                            ?>
                        </ul>
                    </div>

                    <div class="dropdown-item">
                        <h1 class="dropdown-item-title"><?php echo get_cat_name(8) ?></h1>
                        <ul class="dropdown-item-menu">
                            <?php wp_list_categories( array(
                                'orderby'            => 'id',
                                'show_count'         => false,
                                'use_desc_for_title' => false,
                                'child_of'           => 8,
                                'title_li'            => ''
                            ) ); 
                            ?>
                        </ul>
                    </div>

                    <div class="dropdown-item">
                        <h1 class="dropdown-item-title"><?php echo get_cat_name(7) ?></h1>
                        <ul class="dropdown-item-menu">
                            <?php wp_list_categories( array(
                                'orderby'            => 'id',
                                'show_count'         => false,
                                'use_desc_for_title' => false,
                                'child_of'           => 7,
                                'title_li'            => ''
                            ) ); 
                            ?>
                        </ul>
                    </div>

                    <div class="dropdown-item">
                        <h1 class="dropdown-item-title"><?php echo get_cat_name(9) ?></h1>
                        <ul class="dropdown-item-menu">
                            <?php wp_list_categories( array(
                                'orderby'            => 'id',
                                'show_count'         => false,
                                'use_desc_for_title' => false,
                                'child_of'           => 9,
                                'title_li'            => ''
                            ) ); 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-box">
                <div class="contact-box-item" style="background-image: url('<?php bloginfo('template_url')?>/images/call-icon.png')">
                </div>
            </div>
        </div>
    </header>