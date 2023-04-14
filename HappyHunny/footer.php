	</main><!-- .site-main -->
	<footer class="site-footer">
        <div class="bee-trail"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/footer-beetrail.png'); ">
		<div class="container">
            
            <div class="footer-newsletter">
            
                <h2>Stay up to date</h2>
                
                <p>Whether you want to stay in the loop with Happy Hunny updates
                    or just say “hi” when you miss us, subscribe to our mailing list today.</p>
            
          
            
                <div class="nl-input">
                
                <input type="text" placeholder="Email"><button type="submit">Sign me up</button>
                
                </div> 
                
                <br>
                <span class="newsletter-discl">
                We don’t do spam. While our newsletters are short and always sweet, you can unsubscribe at any time.
                </span>
                
                  </div>
        
			<nav class="footer-navigation">
                
				<nav class="footer-menu">
                    
                    <?php
                    wp_nav_menu( array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'menu',
                    'container' => false,
                        ) );
                    ?>
                </nav>
                
                
                <div class="footer-social">
                
                <a href="#" class="social-twitter">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon-twitter.png" >
                    </a>
                    <a href="#" class="social-insta">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon-insta.png" >
                    </a>
                     <a href="#" class="social-fb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-icon-facebook.png" >
                    </a>
                
			</div>

			</nav><!-- .footer-navigation -->
            
            <div class="footer-bottom">
            
                <div class="left">
                
                Copyright © 2022 Happy Hunny | All rights reserved
                </div>
                
                <div class="right">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo-visa.png" >
                    
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo-mastercard.png" >
               
                </div>
            
            </div>

            
		</div><!-- .container -->
        </div>
	</footer><!-- .site-footer -->
	<?php wp_footer(); ?>
</body>
</html>
