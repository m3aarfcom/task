<div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>OUR STORY</h5>
                        <!-- <div class="sm_space"></div> -->
                        <p>
							<?php the_field('our_story')?>
						</p>
                        <div class="social">
                           <a href="<?php the_field('fb_link') ?>"> <i class="fa-brands fa-facebook-f"></i></a>
						   <a href="<?php the_field('tw_link') ?>"><i class="fa-brands fa-twitter"></i></a>
						   <a href="<?php the_field('insta_link') ?>"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="pages">
                            <h5>MORE...</h5>
                            <ul>
                                <li>About Us</li>
                                <li>Contact Us</li>
                                <li>Track My Order</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="pages">
                            <h5>SHOP</h5>
                            <ul>
                                <li>Bed Linen</li>
                                <li>Bath Towels</li>
                                <li>Bathrobes</li>
                                <li>Home Fragrances</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h5>NEWSLETTER</h5>
                        <!-- <div class="sm_space"></div> -->
                        <p>
                            Subscribe to receive updates, access to <br>exclusive deals,and more.
                        </p>
                        <div class="news_input">
                            <input placeholder="Enter your email address">
                            <div class="news_btn">Subscribe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
        <div class="space"></div>    
        <div class="sm_space"></div>    
        <div class="bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="left">
                            ©2020 BLAUCHE
                        </div>
                        <div class="right">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/payments.png">
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
		<div class="space"></div>
    </div> 
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
 
 $( document ).ready(function() {
            $('.carousel').carousel({
        interval:2000
        })
 });
</script>
<script>
    $('.bars').click(function(){
        $v = $(this).parents('.menu_left').children('.menu_items').toggleClass('show');
        console.log($v);
    });
</script>
</body>
</html>