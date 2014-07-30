<!DOCTYPE html>
<html>
<head>
	<title>Sites</title>
	<script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'></script>
	<link rel="stylesheet" type="text/css" href="assets">
	<!-- Map box CSS -->
	<link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.css' rel='stylesheet' />
	<!-- Google fonts -not nessary -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,400italic,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- Foundateion css -not nessary -->
	<link rel="stylesheet" type="text/css" href="assets/css/foundation.min.css">

	<!-- Fonts icons -not nessary -->
	<link rel="stylesheet" href="/Users/ladmin/Documents/1/assets/css/fontello/css/fontello.css">
    <link rel="stylesheet" href="/Users/ladmin/Documents/1/assets/css/fontello/css/animation.css">

<style type="text/css">
.clear{
	clear:both;
}
body, html {
	font-family: 'Roboto', sans-serif;padding: 0;margin: 0;
}

html{
	background: url('assets/imgs/skulls/skulls.png')
}

header{
	
}
#home{
	padding-top: 20%;
		
	position: relative;
	top: 0;
	display: block;
}
#home{
	color: #FFF;
	background-color: rgba(0,0,0,0.75);
	text-align: center;
height: 99%;
}

#home h1 {
color: #FFF;
font-family: 'Roboto', sans-serif;
text-shadow: 4px 0px 0px rgb(0,0,0);
font-weight: 100;
}

#home h4 {
color: #DDD;
text-shadow: 0px 0px 0px #333;
font-weight: 100;
letter-spacing: 0.17em;
}

#body, #usage, #bigger-picture, #thank-you{
	text-align: center;
}

#body {
background-color: rgba(145,198,255,0.75);
padding: 100px 0px;
color: #777;
}


#body p {
font-size: 14px;
font-weight: 300;
}

footer {
text-align: center;
padding: 25px 0px;
font-size: 11px;
font-weight: 100;
font-family: 'Roboto';
background-color: #000;
color: #FFF;
letter-spacing: 0.13em;
}

hr{}

#body i.icon-info {
background-color: rgba(0,0,0,1);
border-radius: 50px;
height: 100px;
width: 100px;
font-size: 50px;
text-align: center;
color: #FFF;
display: block;
margin: auto;
margin-bottom: 23px;
padding-top: 20px;
}

a#go_to {
position: fixed;
background-color: rgba(255,255,255,1);
width: 189px;
z-index: 99;
right: 91px;
border-radius: 0px 0px 12px 12px;
text-align: center;
padding: 15px;
border: 1px solid;
border-top: 0px;
box-shadow: 0px 0px 7px #333;
}

a#go_to:hover {
background-color: #DDD;
color: #3aF;
}
</style>
</head>
<body>
<a href="login.html" id="go_to">Enter Now</a>

<header id="home">
	<div >
		<i class="icon-location" style="font-size: 80px;"></i>
		<h1>Welcome to homepage!</h1>
		<h4>Illustration of Mapbox</h4>
	</div>
</header>
<section id="body">
	<div>
		<i class="icon-info"></i>
		<div>Info</div>
		<p>Illustration of <a href="http://www.mapbox.com" target="blank">MapBox</a> markers. Being prepopulated from a known table. 
		</p>
	</div>
</section>

<style type="text/css">
#usage {
padding: 89px 0px;
min-height: 50%;
}

#usage .pre{}

#usage .pre h3 {
color: #555;
font-weight: 200;
letter-spacing: 0.12em;
}

#usage .pre div{}

#usage .pre div p {
font-weight: 300;
font-size: 15px;
margin: 0px;
color: #888;
line-height: 1.60em;
letter-spacing: 0.1em;
}
#usage h4 {
font-size: 60px;
font-weight: 100;
letter-spacing: 0.21em;
}

</style>
<style>
#usage .map-divs {
width: 90%;
margin: auto;
margin-top: 58px;
}

#usage .map-divs .map-div{
	background-color: #FFF;
padding: 5px;
margin-bottom: 20px;
}

#usage .map-divs .map-div .basic{
	height: 500px;
	width: 45%;
	float: left;
}

#usage .map-divs .map-div .content{
	float: left;
	text-align: left;
	width: 50%;
	margin-left: 10px;
}

#usage .map-divs .map-div .content pre {
overflow: auto;
height: 363px;
background-color: #EEE;
padding: 0px 14px;
}

#usage .map-divs .map-div .content xmp {
white-space: pre-line;
}
</style>
<section id="usage">
	<div>
		<h4>Usage</h4>
		<div class="pre">
			<h3>Include the following javascript and css in your header.</h3>
			<div>
				<p>&lt;script src='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.js'&gt;&lt;/script&gt;</p>
				<p>&lt;link href='https://api.tiles.mapbox.com/mapbox.js/v1.6.4/mapbox.css' rel='stylesheet' /&gt;</p>
			</div>
		</div>
		<div class="map-divs">
		<!-- Basic Usage -->
			<div class="map-div">
			<!-- Map with id basic to be called in the Js -->
				<div class="basic" id="basic">
				</div>
				<div class="content">
					<h3>Basic Usage</h3>
					<p>Displaying the map by passing it the div#id and your map id [username.mapid] from mapbox.</p>
					<pre>
						<code>
							<xmp>
								<!-- Map with id basic to be called in the Js -->
								<div class="basic" id="basic">

								<script type="text/javascript">
								    var map = L.mapbox.map('basic', 'examples.map-i86nkdio')
							        .setView([40, -74.50], 9);
								</script>
							</xmp>
						</code>
					</pre>
				</div>
				<div class="clear"></div>
			</div>

			<!-- Usage with a marker -->
			<div class="map-div">
			<!-- Map with id basic to be called in the Js -->
				<div class="basic" id="basic-marker">
				</div>
				<div class="content">
					<h3>Basic Usage with single marker with an info box</h3>
					<p>Display map and show a single marker icon.</p>
					<div>
						Illustration from <a href="https://www.mapbox.com/mapbox.js/example/v1.0.0/single-marker/">mapbox</a> with infobox<br/>
					</div>
					<pre>
						<code>
							<xmp>
								<!-- Map with id basic to be called in the Js -->
								<div class="basic" id="basic-marker">

								<script>
									var map = L.mapbox.map('basic-marker', 'examples.map-20v6611k')
									    .setView([38.91338, -77.03236], 16);

									L.mapbox.featureLayer({
									    // this feature is in the GeoJSON format: see geojson.org
									    // for the full specification
									    type: 'Feature',
									    geometry: {
									        type: 'Point',
									        // coordinates here are in longitude, latitude order because
									        // x, y is the standard for GeoJSON and many formats
									        coordinates: [
									          -77.03221142292,
									          38.913371603574 
									        ]
									    },
									    properties: {
									        title: 'Peregrine Espresso',
									        description: '1718 14th St NW, Washington, DC',
									        // one can customize markers by adding simplestyle properties
									        // https://www.mapbox.com/foundations/an-open-platform/#simplestyle
									        'marker-size': 'large',
									        'marker-color': '#BE9A6B',
									        'marker-symbol': 'cafe'
									    }
									}).addTo(map);
								</script>
							</xmp>
						</code>
					</pre>
				</div>
				<div class="clear"></div>
			</div>
			<!-- Display map with with multiple markers using GEOJSON data format -->
			<div class="map-div">
			<!-- Map with id basic to be called in the Js -->
				<div class="basic" id="basic-multiple-markers">
				</div>
				<div class="content">
					<h3>Usage with multiple markers GEOJSON.</h3>
					<p>Displaying the map with multiple markers provide by <a href="">GEOJSON</a> data.</p>
					<pre>
						<code>
							<xmp>
								<!-- Map with id basic to be called in the Js -->
								<div class="basic" id="basic-multiple-markers">

								<script>
								var geojson = [
								  {
								    "type": "Feature",
								    "geometry": {
								      "type": "Point",
								      "coordinates": [-77.03238901390978,38.913188059745586]
								    },
								    "properties": {
								      "title": "Mapbox DC",
								      "description": "1714 14th St NW, Washington DC",
								      "marker-color": "#fc4353",
								      "marker-size": "large",
								      "marker-symbol": "monument"
								    }
								  },
								  {
								    "type": "Feature",
								    "geometry": {
								      "type": "Point",
								      "coordinates": [-122.414, 37.776]
								    },
								    "properties": {
								      "title": "Mapbox SF",
								      "description": "155 9th St, San Francisco",
								      "marker-color": "#fc4353",
								      "marker-size": "large",
								      "marker-symbol": "harbor"
								    }
								  }
								];

								L.mapbox.map('basic-multiple-markers', 'examples.map-i86nkdio')
								  .setView([37.8, -96], 4)
								  .featureLayer.setGeoJSON(geojson);
								</script>
							</xmp>
						</code>
					</pre>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</section>
<style type="text/css">
#bigger-picture{
	padding: 100px 0px;
	background-color: #FFF;
}

#bigger-picture h1{
font-weight: 100;
font-size: 1.75em;

}

#bigger-picture h1 span{font-size: 80px; text-transform: uppercase; font-weight: 900; color: #000; letter-spacing: -0.12em;}

#bigger-picture h1 span:hover {
color: rgb(255, 189, 179);
text-shadow: 0px 0px 0px #000;
}

#bigger-picture p{

}

#bigger-picture div.p {
width: 39%;
margin: auto;
font-weight: 100;
}
#thank-you{
	padding: 30px 0px;
	background-color: #DDD;
}
</style>
<section id="bigger-picture">
	<h1>The <a href="#"><span style="">bigger</span></a> picture</h1>
	<div class="p">
		
		<p>
			Using MapBox with multiple markers loaded from a database.
			The Illustration is basically implemented with Rails.
		</p>
		<p>
			<h4>How?</h4>
			Access the database table containing the longitude and latitude coordinates.
			Surrounding the portion of Javascript code within the loop and pass the 
			longitude and latitude coordinates within the javascripts. With other information from the 
			database.
		</p>
		<p>
			Css could be used to style the box (popup view on markers).
		</p>
	</div>
</section>
<section id="thank-you">
	<h1>Thank You.</h1>
</section>
<footer>
	<a href="http://github.com/Philip-Nunoo/map-box-lllustration"><i class="icon-github-1" style="font-size: 24px;"></i></a>
	<img src="assets/imgs/rubylogo.gif" width="150" style="display: block; margin: auto; margin-bottom: 30px;">
&copy; 2014 ITC 
</footer>

<script type="text/javascript">
	var map = L.mapbox.map('basic', 'examples.map-i86nkdio')
    .setView([40, -74.50], 9);
</script>

<script>
var map = L.mapbox.map('basic-marker', 'examples.map-20v6611k')
    .setView([38.91338, -77.03236], 16);

L.mapbox.featureLayer({
    // this feature is in the GeoJSON format: see geojson.org
    // for the full specification
    type: 'Feature',
    geometry: {
        type: 'Point',
        // coordinates here are in longitude, latitude order because
        // x, y is the standard for GeoJSON and many formats
        coordinates: [
          -77.03221142292,
          38.913371603574 
        ]
    },
    properties: {
        title: 'Peregrine Espresso',
        description: '1718 14th St NW, Washington, DC',
        // one can customize markers by adding simplestyle properties
        // https://www.mapbox.com/foundations/an-open-platform/#simplestyle
        'marker-size': 'large',
        'marker-color': '#BE9A6B',
        'marker-symbol': 'cafe'
    }
}).addTo(map);
</script>

<script>
var geojson = [
  {
    "type": "Feature",
    "geometry": {
      "type": "Point",
      "coordinates": [-77.03238901390978,38.913188059745586]
    },
    "properties": {
      "title": "Mapbox DC",
      "description": "1714 14th St NW, Washington DC",
      "marker-color": "#fc4353",
      "marker-size": "large",
      "marker-symbol": "monument"
    }
  },
  {
    "type": "Feature",
    "geometry": {
      "type": "Point",
      "coordinates": [-122.414, 37.776]
    },
    "properties": {
      "title": "Mapbox SF",
      "description": "155 9th St, San Francisco",
      "marker-color": "#fc4353",
      "marker-size": "large",
      "marker-symbol": "harbor"
    }
  }
];

L.mapbox.map('basic-multiple-markers', 'examples.map-i86nkdio')
  .setView([37.8, -96], 4)
  .featureLayer.setGeoJSON(geojson);
</script>
</body>
</html>