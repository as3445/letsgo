<?php  include('header.php') ?>
<div class="container-fluid">
  <h4 style="text-align: center;">Tell us a little bit about yourself!</h4>
  <fieldset>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="expiry-month">I am a...</label>
      <div class="col-sm-9">
        <div class="row">
          <div class="col-xs-6">
            <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
              <option>Month</option>
              <option>Straight</option>
              <option>Gay</option>
              <option>Bisexual</option>
              <option>More options</option>
            </select>
          </div>
          <div class="col-xs-6">
            <select class="form-control" name="expiry-year">
              <option>Woman</option>
              <option>Man</option>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="card-number">I want to visit...</label>
      <div class="col-sm-9">
        <div class="ui-widget">
          <input id="city" class="form-control" style="width:100%">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label" for="card-number">I want to spend...</label>
      <div class="col-sm-9">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
          <span class="input-group-addon">.00</span>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12">
        <div class="input-group">
          <a href="match.php">  <input type="submit" class="form-control" value="Let's find a partner!"> </a>
        </div>
      </div>
    </div>
</div>

<?php  include('footer.php') ?>
