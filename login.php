<?php include 'header.php' ?>

     
<div class="container-fluid">
  <h3 class="demo-panel-title">Sign In</h3>
  <div class="row">
    <div class="col-xs-12 center">
      <div class="form-group">
        <input type="text" value="" placeholder="Email" class="form-control" />
      </div>
      <div class="form-group">
        <input type="text" value="" placeholder="Passowrd" class="form-control" />
      </div>
      <div class="">
      <a class="btn btn-block btn-lg btn-info"  style="background-color:#1abc9c;">
        <i class="facebook"></i> Sign in
      </a>
      </div>
      <br>
      <div class="">
      <a class="btn btn-block btn-lg btn-info" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
        <i class="fa fa-facebook"></i> Sign in with Facebook
      </a>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>


