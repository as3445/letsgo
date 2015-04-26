<?php  include('header.php') ?>

<div class="container-fluid">

  <div id="wrapper">

      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="container-fluid load">
          <div class="row" style="text-align: center; margin: 10px 0;">
          	<button class="btn btn-lg btn-alert"><i class="fa fa-refresh fa-spin"></i>  Loading...</button>
          </div>
        </div>

        <select id="planner" class="form-control" style="display: none;">

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

      $("#planner").css("display", "block");
      // console.log(trips);
      for (var r in trips){
        console.log(trips[r]);
        $("#planner").append("<option>" + trips[r].departure_date + "</option>");
      }

      $(".load").html("Available Dates");
    });
  });

  
  </script>

<?php  include('footer.php') ?>
