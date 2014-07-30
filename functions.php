<?php 
// 0 brings everything for all tellers within a day
// 1 bring per teller for a day

// require 'db_models/Marker.php';
//  // 
// $requestType = $_GET['request'];

// if (isset($requestType)){
// 	// Create Marker
// 	if($requestType == 'createMarker'){
// 		$lon = $_POST['longitude'];
// 		$lat = $_POST['latitude'];
// 		$desc = $_POST['description'];
		
// 		$marker = new Marker($lon, $lat, $desc);	

// 		if($marker->save()){
// 		} else {
// 			echo "Error inserting item";
// 		}
// 	} 
// 	// All markder
// 	elseif ($requestType == "allMarkers") {
		
// 		$marker = new Marker();
// 		$markers = $marker->all();

// 		echo $markers;
// 	}
// 	else{
// 		echo "nothing here";
// 	}
	
// } else {
// 	echo "No value for request";
// }
$url = "http://transflowcloud.com/RestService/mob.api/";
$ch = curl_init();
$_POST['password'] = base64_encode('baby');
$PostField = $_POST;

// Get cURL resource
$curl = curl_init();
// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => $PostField
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
// Close request to clear up some resources
curl_close($curl);





// $content = file_get_contents(url);
$json = json_encode($resp);
// $json = $content;
echo $json;