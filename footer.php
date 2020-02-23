
<button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop relative"><i class="fa fa-angle-up" aria-hidden="true"></i></button>

  <div class="app_download">
    <div class="continer-fluid">
      <div class="row">
        <div class="col">
          <div class="google-btn" style="width: 136px; height: 40px; display: inline-block;">
            <a href="https://play.google.com/store/apps/details?id=com.expatriates.app">
              <amp-img src="images/google.png" alt="logo" layout="responsive" height="40px" width="136px"></amp-img>
            </a>
          </div>
          <div class="apple-btn" style="width: 118px; height: 40px; display: inline-block;">
            <a href="https://itunes.apple.com/eg/app/expatriates-com/id1187248827?mt=8">
              <amp-img src="images/apple.png" alt="logo" layout="responsive" height="40px" width="118px"></amp-img>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

<footer id="footer" class="footer" style="background-color: #333333;">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <div class="col c3a">
          <div class="platform" style="text-align: left;">
            <h5>PLATFORM</h5>
            <ul>
              <li style="margin-left: 0; display: block;"><a href="#">Modify an Ad</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">Advertising</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">Terms of Use</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">Privacy</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">System Status</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">Unsubscribe</a></li>
            </ul>
          </div>
        </div>
        <div class="col c3b">
          <div class="support" style="text-align: left;">
            <h5>SUPPORT</h5>
            <ul>
              <li style="margin-left: 0; display: block;"><a href="#">Knowledge Base</a></li>
              <li style="margin-left: 0; display: block;"><a href="#">All articles</a></li>
            </ul>
          </div>
        </div>
        <div class="col c3c">
          <div class="contactus" style="text-align: left;">
            <h5>CONTACT US</h5>
            <ul>
              <li style="margin-left: 0; display: block;"><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-3d">
        <div class="free-ad">
          <a href="#" class="btn btn-default" style="width: 100%; padding: 15px; color: #ffffff; font-size: 16px; border-radius: 2px;">Place a Free Ad</button>
          </a>
        </div>        
        <div class="follow">
          <h5 style="display: inline-block; color: #ffffff; text-transform: initial;">Follow us</h5>
          <ul style="display: flex;">
            <li>
              <a href="#" class="facebook" style="width: 40px; height: 40px; margin-left: 0; display: inline-block;  display: flex; align-items: center; justify-content: center;">
                <div class="follow-img-wrapper" style="width: 25px; height: 25px;">
                  <!-- <amp-img src="images/facebook.png" alt="logo" layout="responsive" height="25px" width="25px"></amp-img> -->
                </div>
              </a>
            </li>
            <li>
              <a href="#" class="twitter" style="margin-left: 0; width: 40px; height: 40px; margin-left: 15px; display: flex; align-items: center; justify-content: center;">
                <div class="follow-img-wrapper" style="width: 25px; height: 25px;">
                  <!-- <amp-img src="images/twitter.png" alt="logo" layout="responsive" height="25px" width="25px"></amp-img> -->
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="copyright"  style="background-color: #333333; padding: 25px 0;
    border-top: 1px solid #4d4e4f;">
<div class="container">
  <div class="row">
  <div class="col12">
    <span style="color: #626262;">
      Copyright © 2020 Expatriates.com | All rights reserved.
    </span>
  </div>
</div>
</div>
</div>



<style>
  .app_download { background: #f0f0f0; padding: 35px 0 30px 25px; }
  footer#footer .col-9 { width: 75%; display: flex; }
  footer#footer .col.c3a { width: 25%; }
  footer#footer .col.c3b { width: 25%; }
  footer#footer .col.c3c { width: 25%; }
  footer#footer .col-3d { width: 25%; margin: auto 0; }

  footer#footer .container { width: 92%; margin: 0 auto; }
  footer#footer .row { display: flex; }
  .platform h5, .support h5, .contactus h5 { margin-bottom: 50px; color: #ffffff; }
  .follow { margin-top: 45px; display: flex; align-items: center; justify-content: space-between; }

@media only screen and (max-width: 767px) {
  .app_download { text-align: center; }
  footer#footer .col-9 { width: 100%; display: unset; }
  footer#footer .col.c3a, footer#footer .col.c3b { width: 50%; }
  footer#footer .col.c3c { width: 100%; }
  footer#footer .col-3d { width: 100%; margin: unset; }

  footer#footer .col-9 .col:not(:last-child) { display: flex; }

  footer#footer .container { width: 100%; }
  footer#footer .row { display: unset; }
  .support:before, .support:after, .free-ad { display: none; }
  .platform, .support, .contactus { margin-bottom: 50px; }
  .platform h5, .support h5, .contactus h5 { margin-bottom: 20px; }
  .follow { margin-top: 0px; }

}

</style>