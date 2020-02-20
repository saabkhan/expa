<!doctype html>
<html amp>
  <head>
    <meta charset="utf-8">
    <title>Imperial Boootstrap Template</title>
    <meta name="description"  content="" />
    <link rel="canonical" href="#">
    <link rel="shortcut icon" href="images/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

<!--  Import amp-position-observer extension -->
  <script async custom-element="amp-position-observer" src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>

  <!--  Import amp-animation extension -->
  <script async custom-element="amp-animation" src="https://cdn.ampproject.org/v0/amp-animation-0.1.js"></script>


    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <?php readfile( getcwd() . "/head.php"); ?>
    <style amp-custom>
    <?php readfile( getcwd() . "/style.css");
    ?>

  .scrollToTop {
    color: #fafafa;
    font-size: 1.4em;
    box-shadow: 0 1px 1.5px 0 rgba(0,0,0,.12), 0 1px 1px 0 rgba(0,0,0,.24);
    width: 50px;
    height: 50px;
    border-radius: 100px;
    border: none;
    outline: none;
    background: #E91E63;
    z-index: 9999;
    bottom: 10px;
    right: 10px;
    position: fixed;
    opacity: 0;
    visibility: hidden;
  }
  #marker {
    position: absolute;
    top: 100px;
    width: 0px;
    height: 0px;
  }
    </style>
  </head>
 <body>
 	<?php  readfile( getcwd() . "/header.php"); ?>
<section class="body_section" id="bod">
 <div id="top-page"></div>

  <!--
  We use 2 `amp-animation` elements to trigger the visibility of the button.
  The first one is for making the button visible...
  -->
  <amp-animation id="showAnim" layout="nodisplay">
    <script type="application/json">
      {
        "duration": "200ms",
         "fill": "both",
         "iterations": "1",
         "direction": "alternate",
         "animations": [
           {
             "selector": "#scrollToTopButton",
             "keyframes": [
               { "opacity": "1", "visibility": "visible" }
             ]
           }
         ]
      }
    </script>
  </amp-animation>
  <!-- ... and the second one is for adding the button.-->
  <amp-animation id="hideAnim" layout="nodisplay">
   <script type="application/json">
     {
       "duration": "200ms",
         "fill": "both",
         "iterations": "1",
         "direction": "alternate",
         "animations": [
           {
             "selector": "#scrollToTopButton",
             "keyframes": [
               { "opacity": "0", "visibility": "hidden" }
             ]
           }
         ]
     }
   </script>
 </amp-animation>
  <!-- We use `amp-position-observer` to start the animation when the user starts to scroll. -->
  <div id="marker">
        <amp-position-observer
           on="enter:hideAnim.start; exit:showAnim.start"
           layout="nodisplay">
         </amp-position-observer>
       </div>

<section class="banner_section bg">
      <div class="layer">
        <div class="banner_main">
            <div class="inner_main">
                <div class="slide_main">
                   <div class="slder_img">
                          <amp-img alt=""
                            src="images/logo.png"
                            width="348"
                            height="112"
                            layout="responsive">
                          </amp-img>
                   </div>
                   <div class="slide_cntnt">
                       <h1 class="wlcm">Welcome to Imperial studios</h1>
                       <div class="my_carosel">
                    <amp-carousel width="1024" height="100" layout="responsive" type="slides" delay="3000" autoplay>
                        <div class="slide">
                            <h2>We create beautiful graphics</h2>
                        </div>
                         <div class="slide">
                            <h2>We create functional websites</h2>
                        </div>
                         <div class="slide">
                            <h2>We create working mobile apps</h2>
                        </div>
                    </amp-carousel>
                    </div>
                        <div class="btns">
                            <div><a href="#" class="started">Get Strated</a></div>
                            <div><a href="#" class="service">Our Services</a></div>
                        </div>
                   </div>
                </div> 
          </div>
        </div>
        </div>
</section>
<section class="body">
<div id="top-page">
    <amp-animation id="showAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "1",
          "visibility": "visible"
        }]
      }]
    }
  </script>
</amp-animation>

<amp-animation id="hideAnim"
  layout="nodisplay">
  <script type="application/json">
    {
      "duration": "200ms",
      "fill": "both",
      "iterations": "1",
      "direction": "alternate",
      "animations": [{
        "selector": "#scrollToTopButton",
        "keyframes": [{
          "opacity": "0",
          "visibility": "hidden"
        }]
      }]
    }
  </script>
</amp-animation>
<div id="marker">
  <amp-position-observer on="enter:hideAnim.start; exit:showAnim.start"
    layout="nodisplay">
  </amp-position-observer>
</div>
<button id="scrollToTopButton"
  on="tap:top-page.scrollTo(duration=200)"
  class="scrollToTop">⌃</button>
</div>


    <div class="container">
        <div class="heading">
            <h3 class="section-title">About Us</h3>
            <div class="section-title-divider"></div>
        </div>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
        <div class="left_right">
            <div class="one_half">
                <amp-img alt=""
                    src="images/about-img.jpg"
                    width="800"
                    height="533"
                    layout="responsive" class="sction_img">
                  </amp-img>
            </div>
            <div class="one_half">
                <h2 class="about-title">We provide great services and ideass</h2>
                <p class="about-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate
                  </p>
                  <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
          </p>
            </div>

        </div>
    </div>
</section>
<section class="services_sec bg">
    <div class="inner_main_srvc">
    <div class="content">
        <div class="container">
            <div class="heading">
                <h3 class="section-title">Our Services</h3>
                <div class="section-title-divider"></div>
            </div>
            <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
            <div class="services">
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-desktop"></i></div>
                    <h4 class="service-title"><a href="">Lorem Ipsum</a></h4>
                    <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="service-title"><a href="">Dolor Sitema</a></h4>
                    <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-paper-plane"></i></div>
                    <h4 class="service-title"><a href="">Sed ut perspiciatis</a></h4>
                    <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-photo"></i></div>
                    <h4 class="service-title"><a href="">Magni Dolores</a></h4>
                    <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-road"></i></div>
                    <h4 class="service-title"><a href="">Nemo Enim</a></h4>
                    <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                </div>
                <div class="one_four">
                    <div class="service-icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="service-title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="subscribe_sec bg ">
    <div class="lyr">
    <div class="container">
        <div class="main">
            <div class="text">
                <h3 class="subscribe-title">Subscribe For Updates</h3>
                <p class="subscribe-text">Join our 1000+ subscribers and get access to the latest tools, freebies, product announcements and much more!</p>
            </div>
            <div class="buton">
                <a class="subscribe-btn service" href="#">Subscribe Now</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="portfolio" id="f">
    <div class="container">
        <div class="heading">
            <h3 class="section-title">Portfolio</h3>
            <div class="section-title-divider"></div>
        </div>
        <div class="one_3_main">
            <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-1.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 1</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-2.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 2</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-3.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 3</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-4.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 4</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-5.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 5</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-6.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 6</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-7.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 7</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
             <div class="one_3">
                    <amp-img alt=""
                        src="images/portfolio-8.jpg"
                        width="350"
                        height="260"
                        layout="responsive" class="pf">
                    </amp-img>
                <div class="uper">
                    <div class="inner"> 
                    <a class="portfolio-item" href="">
                        <div class="details">
                          <h4>Portfolio 8</h4>
                          <span>Alored dono par</span>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="heading">
            <h3 class="section-title">Testimonials</h3>
            <div class="section-title-divider"></div>
        </div>
        <div class="set">
            <div class="img_tst mr">
                <div class="profile">
            <div class="pic">
                <amp-img alt=""
                        src="images/client-1.jpg"
                        width="400"
                        height="400"
                        layout="responsive" class="pf">
                    </amp-img>
            </div>
            <h4>Saul Goodman</h4>
            <span>Lawless Inc</span>
          </div>
            </div>
            <div class="testi">
        <div class="quote">
            <b><span class="left_q"><i class="fa fa-quote-left" aria-hidden="true"></i>
                </span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper. <span class="right_q"><i class="fa fa-quote-right" aria-hidden="true"></i>
                </span></b> 
          </div>
       
            </div>
        </div>
         <div class="set">
             <div class="testi">
            <div class="quote">
                <b><span class="left_q"><i class="fa fa-quote-left" aria-hidden="true"></i>
                    </span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae <span class="right_q"><i class="fa fa-quote-right" aria-hidden="true"></i>
                    </span></b> 
           </div>
            </div>

            <div class="img_tst ml">
                <div class="profile">
            <div class="pic">
                <amp-img alt=""
                        src="images/client-2.jpg"
                        width="400"
                        height="400"
                        layout="responsive" class="pf">
                    </amp-img>
            </div>
            <h4>Sara Wilsson</h4>
            <span>Odeo Inc</span>
          </div>
            </div>
           
        </div>
    </div>
</section>
<section class="team">
    <div class="container">
        <div class="heading">
            <h3 class="section-title">Our Team</h3>
            <div class="section-title-divider"></div>
            <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="main_team">
            <div class="person">
                <div class="member">
                        <div class="pics">
                             <amp-img alt=""
                                src="images/team-1.jpg"
                                width="400"
                                height="400"
                                layout="responsive" class="pf">
                            </amp-img>
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            <div class="social">
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              <a href=""><i class="fa fa-linkedin"></i></a>
                             </div>
                        </div>
                </div>
                 <div class="member">
                        <div class="pics">
                             <amp-img alt=""
                                src="images/team-2.jpg"
                                width="400"
                                height="400"
                                layout="responsive" class="pf">
                            </amp-img>
                                <h4>Sarah Jhinson</h4>
                                <span>Product Manager</span>
                            <div class="social">
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              <a href=""><i class="fa fa-linkedin"></i></a>
                             </div>
                        </div>
                </div>
                 <div class="member">
                        <div class="pics">
                             <amp-img alt=""
                                src="images/team-3.jpg"
                                width="400"
                                height="400"
                                layout="responsive" class="pf">
                            </amp-img>
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            <div class="social">
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              <a href=""><i class="fa fa-linkedin"></i></a>
                             </div>
                        </div>
                </div>
                 <div class="member">
                        <div class="pics">
                             <amp-img alt=""
                                src="images/team-4.jpg"
                                width="400"
                                height="400"
                                layout="responsive" class="pf">
                            </amp-img>
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            <div class="social">
                              <a href=""><i class="fa fa-twitter"></i></a>
                              <a href=""><i class="fa fa-facebook"></i></a>
                              <a href=""><i class="fa fa-google-plus"></i></a>
                              <a href=""><i class="fa fa-linkedin"></i></a>
                             </div>
                        </div>
                </div>
        </div>
    </div>
</section>
<section class="form_sec">
    <div class="container">
        <div class="heading">
            <h3 class="section-title">Contact Us</h3>
            <div class="section-title-divider"></div>
        </div>
        <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        <div class="form_row">
            <div class="text_s">
                <div>
                  <i class="fa fa-map-marker"></i>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>
                <div>
                  <i class="fa fa-envelope"></i>
                  <p>info@example.com</p>
                </div>
                <div>
                  <i class="fa fa-phone"></i>
                  <p>+1 5589 55488 55s</p>
                </div>
            </div>
            <div class="form_s">
                <form method="post"   action-xhr="#" target="_top">
                   
                    <p> <input type="text" name="" placeholder="Your Name"></p>
                    <p><input type="text" name="" placeholder=" Your Email"></p>
                    <p><input type="text" name="" placeholder="Subject"></p>
                    <p> <textarea rows="10" cols="10 " class="txtarea" placeholder="Message"></textarea></p>
                   
                    <button class="submit">Send Message</button>
                </form>
            </div> 
        </div>
    </div>
    
</section>

</section>
 <button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop">⌃</button>

<?php readfile( getcwd() . "/footer.php"); ?>
 </body>
</html>