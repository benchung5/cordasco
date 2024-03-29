<!DOCTYPE html>
<html lang="en-US">
   <head>
      <title>Your Site Title | Your Site Brief Tagline</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
      <meta name="description" content=" | Your Site Brief Tagline" />
      <meta charset="UTF-8" />
      
      <link rel='stylesheet' id='default-style-css'  href='css/global.css' type='text/css' media='all' />
      <link rel='stylesheet' id='default-style-css'  href='css/style.css' type='text/css' media='all' />
      
      <script type='text/javascript' src='https://code.jquery.com/jquery-1.10.2.min.js'></script>
      
      <script type='text/javascript' src='js/jquery.easing.1.3.js?ver=3.8'></script>
      <script type='text/javascript' src='js/onePixel.js?ver=3.8'></script>
      <script type='text/javascript' src='js/jquery.mobilemenu.js?ver=3.8'></script>
      <script type='text/javascript' src='js/modernizr.js?ver=3.8'></script>
      <script type='text/javascript' src='js/jquery.stellar.min.js?ver=3.8'></script>
      <script type="text/javascript" src="js/jquery.sticky.min.js"></script>
      
      <script src="http://heartcode-canvasloader.googlecode.com/files/heartcode-canvasloader-min-0.9.1.js"></script>
      
      <script>
        $(window).load(function(){
            $("#menu-right-wrapper").sticky({ topSpacing: 0 });
            $('#menu-right-wrapper').on('sticky-start', function () {
                
                var menu = $(this).detach();
                menu.appendTo( "#sticky-main-holder" );
                
                $('#sticky-main-holder').fadeIn('slow');

            });
            $('#menu-right-wrapper').on('sticky-end', function () {
                
                $('#sticky-main-holder').fadeOut('slow');
                
                var menu = $(this).detach();
                menu.appendTo( "#menu-right-wrapper-sticky-wrapper" );
                
            });
            $("#mobile-menu").sticky({ topSpacing: 0 });
        });
      </script>
      
   </head>
   <body  class="home page page-template page-template-template-home-php no-customize-support transparent-header belowheader-menu menu-right-pageheader preload">
      <header id="site-header">
         <div id="header-inner">
            <div class="testpagey" style="display: none; background: #000;">
               &nbsp;<!--keep this to make the height work for testing-->
            </div>
            <div id="header-main-wrapper" class="menu-right">
               <div id="header-main" class="row">
                  <div class="large-4 columns media-center-lg">
                      <div id="logo-header-wrapper">
                        <div id="logo-header">
                            <a href="/"><img src="images/logo-main.png" alt="Logo" title="Your Site Title"/></a>
                        </div>
                     </div>
                  </div>
                  <div class="large-8 columns">
                     <div id="header-right-menu-right">
                        <div class="widget-area widget-header-right">
                           <div class="textwidget">
                               
                               <form action="/search" role="search" method="get" id="searchform">
                                   <div>
                                       <a href="javascript:void(0)" class="search-submit-button">
                                           <i class="fa fa-search"></i>
                                       </a>
                                       <div id="searchtext">
                                           <input type="text" value="" name="kw" id="kw">
                                       </div>
                                   </div>
                               </form>

                               <div class="socials header-socials transparent">
                                   <a class="social link-twitter" alt="twitter" href="http://twitter.com"><i style="font-size: 26px;" class="fa fa-twitter fa-lg simple_social"></i></a>
                                   <a class="social link-facebook"alt="facebook" href="http://facebook.com"><i style="font-size: 26px;" class="fa fa-facebook fa-lg simple_social"></i></a>
   <!--                                <a class="social link-linkedin" alt="linkedin" href="http://linkedin.com"><i style="font-size: 17px;" class="fa fa-linkedin fa-lg simple_social"></i></a>
                                   <a class="social link-pinterest" alt="pinterest" href="http://pinterest.com"><i style="font-size: 17px;" class="fa fa-pinterest fa-lg simple_social"></i></a>
                                   <a class="social link-googleplus" alt="googleplus" href="http://googleplus.com"><i style="font-size: 17px;" class="fa fa-google-plus fa-lg simple_social"></i></a>
                                   <a class="social link-instagram" alt="instagram" href="http://instagram.com"><i style="font-size: 17px;" class="fa fa-instagram fa-lg simple_social"></i></a>
                                   <a class="social link-youtube" alt="youtube" href="http://youtube.com"><i style="font-size: 17px;" class="fa fa-youtube fa-lg simple_social"></i></a>-->
                               </div>
                               
                               <div id="headertext">
                                   Order Now! 905-735-3716
                               </div>
                               <div class="clear"></div>
                               <div id="menu-right-wrapper">
                                   <div class="bg-wrapper">
                                       <div id="logo-header-follow">
                                           <a href="/"><img src="images/logo-main.png" alt="Logo" title="Your Site Title"/></a>
                                       </div>
                                        <div id="nav-primary-b" class="nav menu-right">
                                            <nav>
                                                <ul class="menu group">
                                                    <li class="active" >
                                                        <a href="index.php">Home</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Samples</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="internal-template.php">Template Sidebar</a></li>
                                                            <li><a href="internal-template-fullwidth.php">Templeate Full Width</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <div class="clear"></div>
                                            </nav>
                                        </div>

                                   </div>
                               </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
             
             <div id="sticky-main-holder">
<!--                 menu gets planted here when sticky-->
             </div>
             
            <div id="mobile-menu">
                <div id="mobile-selector" unselectable="on" class="unselectable">
                     <div id="logo-mobile">
                        <a href="/"><img src="images/logo-main.png" alt="Logo" title="Your Site Title"/></a>
                     </div>
                </div>
               <div id="mobile-dropdown" unselectable="on" class="unselectable">
                  <ul id="menu-custom-mobile-menu" class="menu">
                     <li class="active" >
                        <a href="index.php">Home</a>
                     </li>
                     <li><a href="internal-template.php">Template Sidebar</a></li>
                     <li><a href="internal-template-fullwidth.php">Templeate Full Width</a></li>
                     <li>
                        <a href="#l">Submenu1</a>
                        <ul class="sub-menu">
                           <li><a href="#">Submenu1</a></li>
                           <li><a href="#">Submenu2</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </header>
      <div class="clear"></div>
      <div id="main-wrapper">
          
             <!-- the wrapper for header, footer, and content area -->
   <div class="loading-container loading-container-home">
      <div class="homeslider flexslider-wrapper">
         <div id="slider" class="flexslider">
            <ul class="slides">
               <li>
                  <a href="#">
                  <img src="images/slide1.jpg" alt="" />            
                  </a>
               </li>
               <li>
                  <a href="#">
                  <img src="images/slide2.jpg" alt="" />            
                  </a>
               </li>
            </ul>
            <!-- .slides -->
         </div>
         <!-- .flexslider -->
         <div class="flex-caption-wrapper" >
            <div class="flex-caption">
               <div class="caption-container">
                  <div class="text-container caption-one">
                     <h1>Headline2</h1>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis nulla nec neque eleifend consectetur in nec nisi.</p>
                     <a class="btn solid medium " href="#">Large Button</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
