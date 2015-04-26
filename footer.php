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
<script src="dist/js/vendor/video.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/application.js"></script>
<script src="dist/js/vendor/bootstrap3-typeahead.min.js"></script>

<script>
  videojs.options.flash.swf = "dist/js/vendors/video-js.swf"
</script>


<script>
var $input = $('.typeahead');
$input.change(function() {
  console.log("test");
  $.get('http://api.sandbox.amadeus.com/v1.2/airports/autocomplete?apikey=DXcZXuixye9wgHzKG3Kygsw4Zhulwl3e&term='+value, function(data){
    var list = [];
    for (d in data){
      list.push('{name: "' + data[d].value + '"}');
    }
    $("#locations").typeahead({ source:data });
},'json');
    var current = $input.typeahead("getActive");
    if (current) {
        // Some item from your model is active!
        if (current.name == $input.val()) {
            // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
        } else {
            // This means it is only a partial match, you can either add a new item
            // or take the active if you don't want new items
        }
    } else {
        // Nothing is active so it is a new value (or maybe empty value)
    }
});
</script>


</body>
</html>
