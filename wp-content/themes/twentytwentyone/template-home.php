<?php
/**
 * Template Name: Homepage Template
 */
 get_header();?>
<body>
    <div class="wrapper">
        <div class="menu_mb_bar">
                 <ul>
                        <li>
                        <a href="#">CONTACT</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-user"></i>
                        </li>
                        <li>
                            <i class="fa-solid fa-cart-shopping"></i>
                </ul>              
        </div>
        <!--Header-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="menu_left">
                            <div class="text-center">  
                                <i class="fa-solid fa-bars-staggered bars"></i>
                            </div>
                            <div class="menu_items">
                                        <a href="#">SHOP</a>
                                        <a href="#">OUR STORY</a>
                                        <a href="#">EXPERTISE</a>
                                       
                            </div>
                       </div>
                    </div>
                    <div class="col">
                        <div class="brand">
                            <img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png">
                        </div>
                    </div>
                    <div class="col align-right">
                        <div class="menu_right">
                            <div class="menu_items">
                                <a href="#">CONTACT</a>
                            </div>
                            <div class="user_actions">
                                     <ul>
                                         <li>
                                             <i class="fa-solid fa-magnifying-glass"></i>
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-user"></i>
                                         </li>
                                         <li>
                                             <i class="fa-solid fa-cart-shopping"></i>
                                         </li>
                                     </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider -->
        <div class="slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               
                <div class="explore">
                    <span>EXPLORE</span>
                    <span class="line"></span>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php the_field('slide_1')?>" alt="First slide">
                    <div class="slide_content">
					<?php the_field('slider_text')?>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php the_field('slide_2')?>" alt="Second slide">
                    <div class="slide_content">
                    <?php the_field('slider_text')?>
                    </div>
                  </div>
                
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
        <!--Mian Content-->
        <div class="min_container margin">
           <div class="container">
            <p class="text-center">

   
            <br><br>
            <?php the_field('upper_paragraph')?>
            </p>
            <div class="products">
                <div class="product ">
                    <div class="imgs">
                        <img src="<?php the_field('product_1_second_img')?>">
                        <img src="<?php the_field('product_1_img') ?>" class="hidden">
                        <a href="#" class="shop_btn"><?php the_field('product_1_button_txt') ?></a>
                    </div>
                </div><div class="product ">
                    <div class="imgs">
                        <img src="<?php the_field('product_2_second_img')?>" >
                        <img src="<?php the_field('product_2_img') ?>">
                        <a href="#" class="shop_btn"><?php the_field('product_2_button_txt') ?></a>
                    </div>
                </div><div class="product">
                    <div class="imgs">
                        <img src="<?php the_field('product_3_img') ?>">
                        <a href="#" class="shop_btn"><?php the_field('product_3_button_txt') ?></a>
                    </div>
                  
                </div><div class="product">
                    <div class="imgs">
                        <img src="<?php the_field('product_4_img') ?>">
                        <a href="#" class="shop_btn"><?php the_field('product_4_button_txt') ?></a>
                    </div>
                </div>
            </div>
                    <div class="space"></div>
                    <div class="space"></div>
            <h2><?php the_field('best_seller_title')?></h2>
                     <div class="space"></div>
            <div class="best">
                <div class="product">
                    <img src="<?php the_field('best_1_img')?>" width="100%">
                    <div class="details">
                        <h3><?php the_field('best_1_name') ?></h3>
                        <h4><?php the_field('best_1_price') ?></h4>
                        <span><?php the_field('best_1_stock') ?></span>
                    </div>
                </div>
                <div class="product">
                <img src="<?php the_field('best_2_img')?>" width="100%">
                    <div class="details">
                    <h3><?php the_field('best_2_name') ?></h3>
                        <h4><?php the_field('best_2_price') ?></h4>
                        <span><span class="gold">Special Offer</span> <?php the_field('best_2_stock')?></span>
                    </div>
                </div>
                <div class="product">
                    <img src="<?php the_field('best_3_img')?>" width="100%">
                    <div class="details">
                        <h3><?php the_field('best_3_name') ?></h3>
                        <h4><?php the_field('best_3_price') ?></h4>
                        <span><?php the_field('best_3_stock') ?></span>
                    </div>
                </div>
            </div>
                    <div class="space"></div>
                    <div class="space"></div>
           </div>
        </div>
        <div class="gold_section">
                    <div class="min_container">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2><?php the_field('headline')?></h2>
                                    <br>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php the_field('icon_1')?>">
                                    <div class="title"><?php the_field('feature_title_1') ?></div>
                                    <div class="desc"><?php the_field('desc_1') ?></div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php the_field('icon_2')?>">
                                    <div class="title"><?php the_field('feature_title_2') ?></div>
                                    <div class="desc"><?php the_field('desc_2') ?></div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php the_field('icon_3')?>">
                                    <div class="title"><?php the_field('feature_title_3') ?></div>
                                    <div class="desc"><?php the_field('desc_3') ?></div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php the_field('icon_4')?>">
                                    <div class="title"><?php the_field('feature_title_4') ?></div>
                                    <div class="desc"><?php the_field('desc_4') ?></div>
                                </div>
                            </div>
                    </div>
                  </div>
        </div>
                    <div class="space"></div>
        <div class="reviews">
            <div class="text-center">
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/starspng.png">
                <br>
                <br>
                <div class="review">
                    "<?php the_field('review')?>"
                    <div class="sm_space"></div>
                    <div class="under_border">READ TESTIMONIALS</div>
                </div>
                <div class="space"></div>
                <div class="space"></div>
                <div class="follow">FOLLOW US ON <i class="fa-brands fa-instagram"></i></div>
            </div>
        </div>
                    <div class="space"></div>
        <div class="bottom_banner">
            <div>
                <img src="<?php the_field('gallr_1') ?>">
            </div><div>
                    <img src="<?php the_field('gallr_2') ?>">
                </div><div>
                    <img src="<?php the_field('gallr_3') ?>">
                </div><div>
                    <img src="<?php the_field('gallr_4') ?>">
                </div>

        </div>
                    <div class="space"></div>
                    <div class="sm_space"></div>
      
<?php
get_footer();
?>
