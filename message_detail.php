<?php  include('header.php') ?>

<div class="container-fluid">

  <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="container load">
             <h3>Animated button</h3>
        	<button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Loading...</button>
        </div>
        <select id="planner">

        </select>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-lg-12">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Planner</a>
                      <form role="form">
                        <div class="form-group">

                          <label for="name">Say hi!</label>
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
      <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <script src="dist/js/vendor/jquery.min.js"></script>
  <script>
  $(function() {
    $.get("http://localhost/letsgo/generateRoute.php?action=getFlights", function( res ){
      var trips = JSON.parse(res);
      console.log(res);
      for (var r in trips){
        $("#planner").append("<option>" + res.departure_date + "</option>")
      }
      $("#planner").html("");
    });
  });
  </script>

<?php  include('footer.php') ?>
