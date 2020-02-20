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

