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

<?php  include('footer.php') ?>
