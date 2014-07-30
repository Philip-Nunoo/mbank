var currentLon = "";
var currentLat = "";
var map = L.mapbox.map('map', 'examples.map-i86nkdio').setView([0.0,0.0],4);
var baseLayerGroup = new L.layerGroup();

var infoBox = document.getElementById("demo");

$(document).ready(function () {
	$("input[type='date']").attr('value',today()); // set all input[type=date] to current date
    $(document).foundation('joyride', 'start');

	map.locate(); // Get current user Location
	map.on('locationfound', function(e) { // Callback when current location is found
	    map.fitBounds(e.bounds);
	    map.setZoom(9);
	    getNewTellerMap();
	});
    
});    
/*
 * Function to calculates today / current date Value
**/
function today(){
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} var today = yyyy +"-"+mm+"-"+dd;
    // document.getElementById("DATE").value = today;
    return today;
}

function clickButton(title) {
	console.log(title);
	var i = 0;
    map.featureLayer.eachLayer(function(marker) {
        // You can replace this test for anything else, to choose the right
        // marker on which to open a popup. by default, popups are exclusive
        // so opening a new one will close all of the others.
        i = i +1;
        console.log(i);

        if (marker.feature.properties.title === title) {
            marker.openPopup();
        }
    });
}

function  set_menu(item) {
	var navset = $('#set');

	switch(item) {
	    case 0:
	    	var menu1 = $(".menu1");
	    	if(menu1.hasClass("noMenu")){ // when menu is displayed -- hide menu
		    	menu1.toggleClass("noMenu");
		        $("#set").attr("style", "left: 16%; transition: left 0.14s linear;");
		        $("#nav").attr("style", "visibility: visible; transition: visibility 10.2s linear;");
		        $("#map").attr("style", "width: 81.02%; transition: width 0.14s linear;");
		    } else { // when menu is not displayinng -- show menu
	    		menu1.toggleClass("noMenu");
		        $("#set").attr("style", "left: 0px; transition: left 0.14s linear;");
		        $("#nav").attr("style", "visibility: hidden; transition: visibility 0.05s linear;");
		        $("#map").attr("style", "width: 97%; transition: width 0.14s linear;");
		    }

	        break;
	    case 1:
	    	alert("Add information here");
	        break;
	    case 2:
	    	alert("Nothing");
	    	break;
	    case 3:
	       	$('#appInfo').foundation('reveal', 'open');
	    	break;
	    default:
	       break;
	}
}

$('#tellers').change(getNewTellerMap);
$('#teller_trans_date').change(getNewTellerMap);

function getNewTellerMap() {
	var url = "functions.php";


	var tellerId = $("#tellers").val();
	var date = $("#teller_trans_date").val();
	var apiKey = "xbh6hvLX8GoAH7wHHM7Uj4dJ";
	var geoLoc = "24.34|34.64";
	var mode = 1;
		//  // Remove this line this date value to 

	if(tellerId<=0){ // if no teller has been selected
		mode = 0;
		date = "2014-06-25";
	}
	
	date = "";
	var postdata = {
		tellerId: tellerId,
		apiKey: apiKey,
		geoLocation: geoLoc,
		startDate: date,
		username: 'admin',
	   	method: 'getLocation',
	    crossDomain : true,
	    responseType: "json",
	    mode: mode
	};

	console.log(tellerId);


	$.ajax({
  		type: "POST",
  		url: url,
  		data: postdata,
  		dataType: "json",
  		beforeSend: function(){
  			baseLayerGroup.clearLayers();
  			$("#loading").attr("style", "display: block;");
  			$("div#info").attr("style", "display: none;");
  		},
  		complete: function () {
  			$("#loading").attr("style", "display: none;");
	   		$("div#info").attr("style", "display: block; background-color: rgba(255, 255, 255, 0.23);");
  		},
  		success: function(data){
  			// $("div#info").html(data);
  			// console.log(data);
  			if (mode<=0){
  				parseAllData(data);
  			} else {
  				parseSingleData(data);
  			}
  			
  		},

  		error: function (jqXHR, textStatus, errorThrown) {
  			console.log("ERROR: " + errorThrown);
  		}
	});

}
function parseAllData (data) {
	arr = JSON.parse(data);
	var divString = "<div class='alltellers'><ul>";

	var singleDataLayer = new L.layerGroup();

	$.each(arr, function (idx, obj) {
		var tellerName = obj.name;
		var amount = obj.amount;

		color = "#"+Math.floor(Math.random()*16777215).toString(16);

		divString +=	"<li style='border-top-color: "+color+"' onclick=\"clickButton('" + idx + "')\">"+
						"<div class='tellerName'>" + tellerName + "</div>" +
						"<div class='amount'>" + amount + "</div>" +
						"</li>";

		var popup = "<b>Merchant Name:</b> " + tellerName + "<br/>" + "<b>Amount:</b> collected: " + amount;

		var marker = L.marker(new L.LatLng(obj.longitude, obj.latitude), {
            icon: L.mapbox.marker.icon({'marker-symbol': 'post', 'marker-color': color}),
            title: idx,
            value: idx
        });
		marker.bindPopup(popup);
		marker.addTo(singleDataLayer);
	});
	singleDataLayer.addTo(baseLayerGroup);
	baseLayerGroup.addTo(map);

	divString += "</ul></div>";
	$("div#info").html(divString);
	$('body').prepend("<input type=\"text\" id=\"mgsuggest\"/>");
	$('#mgsuggest').magicSuggest({
        data: ['New York','Los Angeles','Chicago','Houston','Philadelphia','Phoenix','San Antonio','San Diego','Dallas','San Jose','Jacksonville'],
        cls: 'mgsuggest'

    });

}

function parseSingleData (data) {

	var tellerName = arr.name;
	if(tellerName!=null) {

		arr = JSON.parse(data);

		
		var totalAmountForDay = arr.amount;

		var parseSingleDataLayerGroup = new L.layerGroup();

		var divString =	"<table class='user'> " +
							"<tr><th>Name </th><td>" + tellerName + "</td></tr>" +
							"<tr><th>Total Amount </th><td>" + totalAmountForDay + "</td></tr>" +
							"<tr><th>Date: </th><td></td></tr>" +
							"<tr><td colspan='2'>" +
							"<div class=\"icon\" style=\"border-right-color: #0044FF;\"><span style=\"background-color: #0044FF;\"></span>Balance Enquiries</div>"+
							"<div class=\"icon\" style=\"border-right-color: #00FF44;\"><span style=\"background-color: #00FF44;\"></span>Fund Transfers</div>"+
							"</td></tr>" +
						"</table>";
		$("div#info").html(divString);
		

		var markers = new L.MarkerClusterGroup();
		
		
		var locations = arr.location;
		$.each(locations, function(idx, obj){

		    var date_created = obj.date_created;
		    var method = obj.method;
		    var lon = obj.longitude;
		    var lat = obj.latitude;

		    if (lon!=null && lat!=null) {

		    	
		    	var color = "#000";
					if (method=="balanceEnquiry"){
						color = "#0044FF";
					} else { // Fund transfers
						color = "#00FF44";
					}
					lon = parseFloat(lon);
			    lon = lon.toFixed(8);
			   //  lon = lon.toString();

			    
			    lat = parseFloat(lat);
			    lat = lat.toFixed(7);
			    // lat = lat.toString();

		    	var popup = 	"<div class='popup teller_info'>" +
		    			"<div>" + 
		    			"<div class='teller_name'>"+tellerName+"</div>" +
		    			"<div class='date'>"+date_created+"</div>" +
		    			"<div class='type'>"+method+"</div>" +
		    			"</div>"+
		    			"</div>";

			    console.log(obj);
			    var marker = L.marker(new L.LatLng(lon, lat), {
		            icon: L.mapbox.marker.icon({'marker-symbol': 'post', 'marker-color': color}),
		            title: method
		        });
		        marker.bindPopup(popup);
		        markers.addLayer(marker);
		    }
		    
		});
		markers.addTo(parseSingleDataLayerGroup);
		parseSingleDataLayerGroup.addTo(baseLayerGroup);
		baseLayerGroup.addTo(map);
		// map.addLayer(markers);
	} else {
		var divString =	"<div>No reports on this date</div>";
		$("div#info").addClass("style", "background-color: #FAF");
		$("div#info").html(divString);
	}
	
}