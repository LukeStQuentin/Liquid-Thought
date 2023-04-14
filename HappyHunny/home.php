<?php
/*
Template Name: Homepage
*/
get_header(); ?>

<main id="main" class="site-main">
    
    <div class="hero" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/categories-bg-img.png'); ">
        <div class="container">
            
             <h1>Premium, pre-owned kids brands
                <br><strong>for the best value.</strong></h1>     
            
            <div class="hero-flex" >
            
                    <div class="hero-left">

                         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories-big-img.png" >

                    </div>

                    <div class="hero-right">

                            <h3>Head-to-toe</h3>
                        <p>Explore our categories</p>

                              <div class="product-tags">
                            <?php
                              $args = array(
                                'taxonomy'     => 'product_tag',
                                'orderby'      => 'name',
                                'show_count'   => 0,
                                'pad_counts'   => 0,
                                'hierarchical' => 0,
                                'title_li'     => '',
                                'show_option_all'     => 'Both',
                                'style' => 'none',
                                'hide_empty'   => 0
                              );
                              wp_list_categories( $args );
                            ?>
                          </div>        
                            <div class="product-categories">
                            <?php
                              $args = array(
                                'taxonomy'     => 'product_cat',
                                'orderby'      => 'name',
                                'show_count'   => 0,
                                'pad_counts'   => 0,
                                'hierarchical' => 1,
                                'title_li'     => '',
                                'show_option_all'     => 'Shop Everything',
                                'style' => 'none',
                                'number' => 6,
                                'hide_empty'   => 0
                              );
                              wp_list_categories( $args );
                            ?>
                          </div>


                    </div>

            
            </div>


            
        </div>
    </div>

    
    
  <div class="recent-products">
      <div class="container">
      
        <h2>Recently Added</h2>
    <?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>  
          
      </div>
  </div>
    
    
        <div class="quality" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/Banner-CTA-1-bg.png'); ">
        <div class="container">
            
            <div class="quality-left">
            <h1><strong>Quality</strong> controlled <strong>branded</strong> kids’ clothing</h1>
                <p>We know you want to do good- we also know that you want your kid’s clothes to feel good for them. That’s why we prioritise thorough quality control checks on the items sold through our platform.</p>
                <br>
                <a href="#">About us</a>
            </div>
            
            <div class="quality-right">
            
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Quality-big-img.jpg" >
                
            </div>
        
        </div>
    
    </div>
    
    <div class="about">
        
        <div class="container">
        
            <div class="col">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon1.png" >
            <h4>Selling, simplified</h4>
            <p>We’ve taken the hassle out of selling your stuff, with a super simple process.</p>
            </div>
            
             <div class="col">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon2.png" >
             <h4>Environmentally friendly</h4>
            <p>Buying and selling with us means you’re contributing to a kinder & less saturated fashion industry.</p>
            </div>
            
             <div class="col">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Icon3-happiness.png" >
             <h4>Happiness for all!</h4>
            <p>Premium clothing, gently handled with love for bouncing little bees.</p>
            </div>
          
        
        </div>
        
          <div class="container bee-2-cont">
            
                 <div class="bee-2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/bee-2.png" ></div>
                
            </div>
       
    
    </div>
    

    
    
  <div class="featured-products">
      <div class="container">
          
    <h2>Featured Products</h2>
    <?php echo do_shortcode('[featured_products per_page="4" columns="4"]'); ?>
          
      </div>   
    </div>
    

    <div class="promise" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/Banner-CTA-2-bg.png'); ">>
    
        <div class="container">
        
        <p>Our Promise</p>
            
            <h1>Premium, pre-owned kids brands for the <strong>best value.</strong></h1>
        
        </div>
    
    </div>
    
    <div class="categories-grid">
    
        <div class="container">
            
                        <div class="row1">
            
                <div class="col col1"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/grid1.png'); ">
                
                    <a href="#" class="button">Swimwear</a>
                    
                </div>
                
                 <div class="col col2" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/grid2.jpg'); ">
                     
                     <a href="#" class="button">Hoodies</a>
                
                </div>
 
            </div>
        
            <div class="row2">
            
                <div class="col col3"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/grid3.jpg'); ">
                
                    <a href="#" class="button">Girls Tops</a>
                    
                </div>
                
                 <div class="col col4"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/grid4.jpg'); ">
                
                     <a href="#" class="button">Boys Footwear</a>
                
                </div>
                
                 <div class="col col5"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/grid5.jpg'); ">
                
                     <a href="#" class="button">Activewear</a>
                
                </div>
            </div>
            
        </div>
    
    </div>
    
    
    <div class="speech-bubbles">
    
        <div class="container">
        
            <div class="speech-left">
                
                <div class="bubble1 bubble" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/speech-bubble.png'); ">
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.”
                
                </div>
            
                  <span class="founder">Ryan, Co-founder</span>
                
            </div>
            
              <div class="speech-right">
            
            
                  <div class="bubble2 bubble"  style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/speech-bubble.png'); ">
                “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor.”
                
                </div>
                  
                  <span class="founder">Kirtanya, Co-founder</span>
                  
            </div>
        
        </div>
        
    </div>
    
    
    <div class="footer-banner" style=" background-image:url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-cta-03-bg.png'); ">
    
        <div class="container">
        
            <div class="banner-left">
                <div class="copy">
                    
                <h1>Tiny tots getting too big for their boots?</h1>
                
                <p>Don’t let your kid’s clothing end up in a landfill. 
                    Learn how to sell with us- the easy way.
                </p>
                
                </div>
                
                
                <div class="bee">
                
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-cta-03-bee.png" >
                    
                </div>
            
            </div>
            
            
             <div class="banner-right">
            
                 <a class="button" href="#">How it works</a>
                 
            
            </div>
            
        </div>
    
    </div>
    
</main>

<?php get_footer(); ?>
