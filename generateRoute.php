<?php

  $action = isset($_GET['action']) ? $_GET['action'] : "default";

  if($action == "default") { echo "This works!"; }
  if($action == "getFlights") { getFLights(); }

  function getFLights(){
    $apikey = "DXcZXuixye9wgHzKG3Kygsw4Zhulwl3e";
    $inspiration_search_uri = "http://api.sandbox.amadeus.com/v1.2/flights/inspiration-search";

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
    $destination = "PHL";
    $max_price = "600";
    $departure_date = "2015-09-06--2015-09-26";
    $duration = "20";

    $uri =  $inspiration_search_uri . "?"
            ."origin=" . $origin
            ."&destination=" . $destination
            ."&max_price=" . $max_price
            ."&departure_date=" . $departure_date
            ."&duration=" . $duration
            ."&apikey=" . $apikey;

    $result = file_get_contents($uri);
    var_dump($result);
  }

  function getArrivalDate($origin, $destination, $departure_date){
    
  }


?>
