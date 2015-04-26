<?php
  header('Access-Control-Allow-Origin: *'); 
  $action = isset($_GET['action']) ? $_GET['action'] : "default";

  if($action == "default") { echo "This works!"; }
  if($action == "getFlights") { getFLights(); }

  function getFLights(){
    $apikey = "DXcZXuixye9wgHzKG3Kygsw4Zhulwl3e";
    // $inspiration_search_uri = "http://api.sandbox.amadeus.com/v1.2/flights/inspiration-search";
    $inspiration_search_uri = "http://api.sandbox.amadeus.com/v1.2/flights/extensive-search";

    //IATA Location Code
    $origin = $_POST['origin'];
    $destination = $_POST['destination'];

    //Integer in USD
    $max_price = $_POST['max_price'];

    //YYYY-MM-DD[--YYYY-MM-DD]
    $departure_date = $_POST['departure_date'];

    //The allowed duration or range of durations of the trip, in days. Default is 1--30.
    $duration = $_POST['duration'];

    //TEST DATA
    $origin = "BOS";
    $destination = "SFO";
    $max_price = "451";
    $departure_date = "2015-10-01--2015-12-26";
    $duration = "20";

    $uri =  $inspiration_search_uri . "?"
            ."origin=" . $origin
            ."&destination=" . $destination
            ."&max_price=" . $max_price
            ."&departure_date=" . $departure_date
            ."&duration=" . $duration
            ."&apikey=" . $apikey;

    $p1 = file_get_contents($uri);

    //TEST DATA
    $origin = "JFK";
    $destination = "SFO";
    $max_price = "351";
    $departure_date = "2015-10-01--2015-12-26";
    $duration = "20";

    $uri =  $inspiration_search_uri . "?"
            ."origin=" . $origin
            ."&destination=" . $destination
            ."&max_price=" . $max_price
            ."&departure_date=" . $departure_date
            ."&duration=" . $duration
            ."&apikey=" . $apikey;

    $p2 = file_get_contents($uri);

    $p1 = json_decode($p1);
    $p2 = json_decode($p2);

    $p1 = $p1->results;
    $p2 = $p2->results;

    $matched_trips = [];

    foreach($p1 as $key => $p1_faire){
      foreach($p2 as $key => $p2_faire){
        if($p2_faire->departure_date == $p1_faire->departure_date){
          $hotel = getHotel($p2_faire->departure_date);
          $p2_faire->hotels = $hotel;
          array_push($matched_trips, $p2_faire);
        }
      }
    }

    echo json_encode($matched_trips);
  }

function getHotel($date, $max=80){
  date_default_timezone_set('America/Los_Angeles');
  $dep_date=date_create($date);
  date_add($dep_date,date_interval_create_from_date_string("3 days"));
  $checkout =  date_format($dep_date,"Y-m-d");
  $uri = "http://api.sandbox.amadeus.com/v1.2/hotels/search-circle"
  . "?latitude=37.7&longitude=-122.4&radius=50"
  . "&check_in=" . $date
  . "&check_out=" . $checkout
  . "&max_rate=" . $max
  ."&apikey=DXcZXuixye9wgHzKG3Kygsw4Zhulwl3e";

  $hotel = file_get_contents($uri);
  return $hotel;
}

?>
