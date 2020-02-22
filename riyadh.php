<!doctype html>
<html amp>
  <head>
    <meta charset="utf-8">
    <title>expatriates.com</title>
    <meta name="description"  content="" />
    <link rel="canonical" href="https://www.xeodev.com/">
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
  



<button id="scrollToTopButton" on="tap:top-page.scrollTo(duration=200)" class="scrollToTop relative"><span>

  <div class="png-arrow"> 
    <amp-img src="images/arrow1.png" alt="logo2" layout="responsive" width="19" height="22"></amp-img>
  </div>

</span></button>
<?php readfile( getcwd() . "/footer.php"); ?>
 </body>
</html>