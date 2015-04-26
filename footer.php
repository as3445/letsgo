<!-- <footer>
  <div class="container">
    <div class="row">
      <div class="col-xs-7">
        <h3 class="footer-title">Subscribe</h3>

        <a class="footer-brand" href="http://designmodo.com" target="_blank">
        </a>
      </div> <!-- /col-xs-7 -->

      <!-- <div class="col-xs-5">
        <div class="footer-banner">
          <h3 class="footer-title">Get Flat UI Pro</h3>
        </div>
      </div>
    </div>
  </div>
</footer> -->

<script src="dist/js/vendor/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="dist/js/vendor/video.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>
<script src="dist/js/vendor/bootstrap3-typeahead.min.js"></script>

<script>
  videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>


<script>
$(function() {
function log( message ) {
$( "<div>" ).text( message ).prependTo( "#log" );
$( "#log" ).scrollTop( 0 );
}
$( "#city" ).autocomplete({
source: function( request, response ) {
$.ajax({
url: "http://api.sandbox.amadeus.com/v1.2/airports/autocomplete",
dataType: "json",
data: {
apikey: "DXcZXuixye9wgHzKG3Kygsw4Zhulwl3e",
term: request.term
},
success: function( data ) {
response( data );
}
});
},
minLength: 3,
select: function( event, ui ) {
log( ui.item ?
"Selected: " + ui.item.label :
"Nothing selected, input was " + this.value);
},
open: function() {
$( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
},
close: function() {
$( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
}
});
});
</script>


</body>
</html>
