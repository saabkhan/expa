<!doctype html>
<html amp>
    <head>
        <meta charset="utf-8">
        <title>Contact | Medi-Station Urgent Care | Miami, FL</title>
        <meta name="description"  content="" />
        <link rel="canonical" href="http://www.medistationurgentcare.com/">
        <link rel="shortcut icon" href="images/favicon.png">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <?php readfile( getcwd() . "/head.php"); ?>
        <style amp-custom>
        <?php readfile( getcwd() . "/style.css");
        ?>
        </style>
    </head>
    <body>
        <?php readfile( getcwd() . "/header.php"); ?>
        <section class="page_hading_section">
            <div class="container">
                
                <div class="float_left">
                    <h1 class="page_heading">Contact</h1>
                </div>
                <div class="float_right">
                    <div class="g-breadcrumbs">
                        <span><a class="g-breadcrumbs-item"   href="index.html">Home</a></span>
                        <span class="g-breadcrumbs-separator"></span>
                        <span class="g-breadcrumbs-item">Contact</span>
                    </div>
                    
                </div>
            </div>
        </section>
        <section class="body_section">
            <div class="Contact_main_div">
                <div class="iframe_div">
                    <amp-iframe class="iframe_class" width="1500"  height="460"  layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m0!3m2!1sen!2sus!4v1478632652207!6m8!1m7!1suWbuc6pGt72i42LtmPUhJg!2m2!1d25.86354639752783!2d-80.19353962367506!3f330.51224640103493!4f2.143788118573184!5f0.7820865974627469">
                    <amp-img placeholder layout="fill" src="images/map_img.png"></amp-img>
                </amp-iframe>
            </div>
            <div class="form_and_detail">
                <div class="container">
                <div class="detail_for_from">
                    <span class="left_detail">Located in the heart of Miami Shores</span>
                    <span class="left_detail">9600 NE 2nd Avenue, Miami Shores, Fl 33138</span>
                    <span class="left_detail">Mon-Fri 9:00-8:30 | Saturday 10:00-7:30 | Sunday 10:00-5:30</span>
                    <a class="phone_num" href="tel:305-603-7650">305-603-7650</a>
                </div>
           
            <div class="form_section_on_conatc_page">
                <form method="POST" action-xhr="https://dev.optfirst.org/medistationurgentcare2/amp/contact_submission.php" target="_top" class="contact_form_page">
                    <label>Name<span class="label_span">*</span></label>
                    <input type="text" name="name" required>
                     <label>Email<span class="label_span">*</span></label>
                    <input type="Email" name="email" required>
                     <label>Date<span class="label_span">*</span></label>
                    <input type="date" name="date" required>
                     <label class="time_lbl">Time<span class="label_span">*</span></label>
                    <div class="time_div">
                        <!-- <div class="time_unit"> -->
                            <input type="time" placeholder="Hours" name="time" required>
                            <!-- <label><span>HH</span></label> -->
                        <!-- </div> -->
                        <!-- <div class="time_unit">
                            <input type="text" placeholder="Minutes">
                            <label><span>MM</span></label>
                        </div> -->
                    </div>

                     <input type="submit" class="submit" value="Submit">

                     <div submit-success class="successful_submit">
                <template type="amp-mustache">
                    Thank You for your message! Someone from our staff will be in touch shortly.
                  </template>
                </div>
                <div submit-error class="failed_submission">
                    <template type="amp-mustache">
                      Submission failed!
                    </template>
                </div>
                </form>
            </div>
            <div class="images_section">
                <h2 class="Practice">Practice Interior</h2>
                <div class="img_row">
                    <div class="amp_img_in_row">
                    <amp-img alt="Practice Interior"
                      src="images/2-1.png"
                      width="512"
                      height="384"
                      layout="responsive">
                    </amp-img>
                    </div>
                    <div class="amp_img_in_row">
                    <amp-img alt="Practice Interior"
                      src="images/3.png"
                      width="512"
                      height="384"
                      layout="responsive">
                    </amp-img>
                    </div>
                </div>
                <div class="img_row">
                    <div class="amp_img_in_row">
                    <amp-img alt="Practice Interior"
                      src="images/4.png"
                      width="512"
                      height="384"
                      layout="responsive">
                    </amp-img>
                    </div>
                    <div class="amp_img_in_row">
                    <amp-img alt="Practice Interior"
                      src="images/1-1.png"
                      width="512"
                      height="384"
                      layout="responsive">
                    </amp-img>
                    </div>
                </div>
            </div>
             </div>
             </div>
    </div>
</section>
<?php readfile( getcwd() . "/footer.php"); ?>
</body>
</html>