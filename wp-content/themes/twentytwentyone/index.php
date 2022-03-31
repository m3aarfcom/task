<?php get_header();?>
<body>
    <div class="wrapper">
        <!--Header-->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="menu_left">
                            <div class="menu_items">
                                <a href="#">SHOP</a>
                                <a href="#">OUR STORY</a>
                                <a href="#">EXPERTISE</a>
                            </div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="brand">
                            <img class="logo" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo.png">
                        </div>
                    </div>
                    <div class="col-lg-4 align-right">
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
                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide1.png" alt="First slide">
                    <div class="slide_content">
					<?php the_field('slider_text'); ?>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/slide2.png" alt="Second slide">
                    <div class="slide_content">
                     <?php the_field('slider_text'); ?>
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
				<?php the_field('slide_2') ?>
				<br>
				<br>
                Our premium products got the finest quality cotton that create an exquisite lightweight <br>
                textile that’s both soft and crisp – guaranteed to give you a wonderful night’s sleep.
            </p>
            <div class="products">
                <div class="product ">
                    <div class="imgs">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/line1.png">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/line3.png" class="hidden">
                        <a href="#" class="shop_btn">Shop Bed Linens</a>
                    </div>
                </div><div class="product ">
                    <div class="imgs">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/twol2.png">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/twol1.png">
                        <a href="#" class="shop_btn">Shop Bath Towels</a>
                    </div>
                </div><div class="product">
                    <div class="imgs">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/robes.png">
                        <a href="#" class="shop_btn">Shop Bath Robes</a>
                    </div>
                  
                </div><div class="product">
                    <div class="imgs">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/home1.png">
                        <a href="#" class="shop_btn">Shop Home Fragrances</a>
                    </div>
                </div>
            </div>
                    <div class="space"></div>
                    <div class="space"></div>
            <h2>Best Sellers</h2>
                     <div class="space"></div>
            <div class="best">
                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/aed.png" width="100%">
                    <div class="details">
                        <h3>Product Name</h3>
                        <h4>AED XXX</h4>
                        <span>Available in 5 colours</span>
                    </div>
                </div>
                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/aed.png" width="100%">
                    <div class="details">
                        <h3>Product Name</h3>
                        <h4>AED XXX</h4>
                        <span><span class="gold">Special Offer</span> Get 25% OFF</span>
                    </div>
                </div>
                <div class="product">
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/aed.png" width="100%">
                    <div class="details">
                        <h3>Product Name</h3>
                        <h4>AED XXX</h4>
                        <span>Available in 3 colours</span>
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
                                    <h2>Your Comfort Is Our #1 Priority</h2>
                                    <br>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/books.png">
                                    <div class="title">Quality Product</div>
                                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga</div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/star.png">
                                    <div class="title">Lifetime Warranty</div>
                                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga</div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/fire.png">
                                    <div class="title">Stress-free Shopping</div>
                                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga</div>
                                </div>
                                <div class="col-lg-3 feature">
                                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/money.png">
                                    <div class="title">Fair Prices</div>
                                    <div class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit Fuga</div>
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
                    "This is the best towel set I've ever had; it's cool,
                    <br>
                    comfortable and aesthetically perfect."
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
                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner4.png">
            </div><div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner1.png">
                </div><div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner2.png">
                </div><div>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/banner3.png">
                </div>

        </div>
                    <div class="space"></div>
                    <div class="sm_space"></div>
      
<?php
get_footer();
?>
