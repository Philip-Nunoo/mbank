<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<ul>
	<li><a href="new.html">New</a></li>
	<li><a href="view_all_map.html">View Map Representation</a></li>
</ul>
<div>
	<table>
		<tr>
			<th>Count</th>
			<th>Longitude</th>
			<th>Latitude</th>
		</tr>
		<?php ?>
		<tr>
			<td>count</td>
			<td>longitude</td>
			<td>latitude</td>
		</tr>
		<?php ?>
	</table>
</div>
<div id="log"></div>
<script type="text/javascript">
var request = $.ajax({
  url: "/mapexample/functions.php?requestType=allMarkers",
  type: "GET",
  data: {},
  dataType: "html"
});
 
request.done(function( msg ) {
  $( "#log" ).html( msg );
});
 
request.fail(function( jqXHR, textStatus ) {
  alert( "Request failed: " + textStatus );
});
</script>