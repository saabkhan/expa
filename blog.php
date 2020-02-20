<!doctype html>
<html amp>
  <head>
    <meta charset="utf-8">
    <title>Orlando Florida Web Design and Software Development Company | XeoDev</title>
    <meta name="description"  content="" />
    <link rel="canonical" href="https://www.xeodev.com/blog/">
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
 	<?php  readfile( getcwd() . "/header.php"); ?>
    <?php  readfile( getcwd() . "/go-top-arrow.php"); ?>

<amp-analytics type="gtag" data-credentials="include">
      <script type="application/json">
        {
          "vars": {
            "gtag_id": "<GA_MEASUREMENT_ID>",
            "config": {
              "<GA_MEASUREMENT_ID>": { "groups": "default" }
            }
          },
          "triggers": {
            "button": {
              "selector": "#the-button",
              "on": "click",
              "vars": {
                "event_name": "login",
                "method": "Google"
              }
            }
          }
        }
      </script>
    </amp-analytics>


<!--Section 1-->
<section class="blog">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2>Xeodev Blog | &nbsp;<a style="text-decoration:underline;color:gray" href="https://www.xeodev.com/case-studies/index"> Case Studies</a></h2>
				<h1>Orlando web development news, tip and tricks, and guides - by XEODEV</h1>
			</div>
		</div>
		<div class="row blog-row">
			<div class="col-7" style="padding: 0px;">
				<div class="blog-box">
					<div class="img-wrapper">
					</div>
				</div>
			</div>
		<div class="col-5" style="padding: 0px;">
      <div class="text-box">
        <div class="text-header">
          <h2><a href="https://www.xeodev.com/blog/how-to-xeo">How to Xeo?</a></h2>
          <div class="png-el"> 
            <amp-img src="images/el2.png" alt="logo2" layout="responsive" width="19" height="22"></amp-img>
          </div>

        </div>
        <div class="date-box">
          <div class="png-calendar"> 
            <amp-img src="images/calendar.png" alt="logo2" layout="responsive" width="19" height="22"></amp-img>
          </div>
          <p>Aug 7, 2019</p>
        </div>
        <p class="top">
          "Xeo: Innovative ideas that have yet to be discovered; All knowing of what is yet to be discovered" - <a href="https://www.urbandictionary.com/define.php?term=Xeo"><u>Urban Dictionary</u></a>
        </p>
        <h3>Xeo</h3>

        <p class="bottom">
            We always double check Urban Dictionary while researching a brand name. Sometimes the definition on Urban Dictionary causes that brand name to be discarded. Not in this case. We absolutely love how well the definition describes who we are and what we love to do. If you can hold your peace while in the chaos which surrounds...
            
        </p>
        <h4><a href="https://www.xeodev.com/blog/how-to-xeo"><u>More</u></a></h4>

      </div>
		</div>
	</div>
	</div>
</section> 
<!--close-->


<button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop relative"><span>

  <div class="png-arrow"> 
    <amp-img src="images/arrow1.png" alt="logo2" layout="responsive" width="19" height="22"></amp-img>
  </div>

</span></button>
<?php readfile( getcwd() . "/footer.php"); ?>
 </body>
</html>