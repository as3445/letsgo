<?php  include('header.php') ?>
  <p style="text-align: center;">Tell us a little bit about yourself!</p>
  <p>I am a...</a>
  <select name="orientation">
    <option>Straight</option>
    <option>Gay</option>
    <option>Bisexual</option>
    <option>More options</option>
  </select>
  <select name="sex">
    <option>Woman</option>
    <option>Man</option>
  </select>

  <p>I want to visit...</p>
  <input autofocus id="locations" type="text" data-provide="typeahead" name="locations" autocomplete="off">
  <div class="ui-widget">
<label for="city">Your city: </label>
<input id="city">
Powered by <a href="http://sandbox.amadeus.com">Amadeus Travel Innovation Sandbox</a>
</div>
<div class="ui-widget" style="margin-top:2em; font-family:Arial">
Result:
<div id="log" style="height: 200px; width: 300px; overflow: auto;" class="ui-widget-content"></div>
</div>
<?php  include('footer.php') ?>
