<?php
/**
* Class For marker
*/
class Marker
{
	public $lon = null;
	public $lat;
	public $desc;

	private $con;

	function __construct($lon, $lat, $desc)
	{
		require_once('config.php');

		$this->con = $con;
		$this->lon = $lon;
		$this->lat = $lat;
		$this->desc = $desc;
		
		$this->initDB();
	}

	public function save(){
		echo $sql = "INSERT INTO test.marker (longitude, latitude, description) VALUES ('{$this->lon}', '{$this->lat}', '{$this->desc}')";

		if (!mysqli_query($this->con,$sql)) {
			die('Error: ' . mysqli_error($con));
			return false;
		} else {
			return true;
		}
	}

	public function all()
	{
		$sql = "SELECT * FROM test.marker";

		$results = mysqli_query($this->con, $sql);

		$row = mysqli_fetch_array($results);

		return $row;
	}

	private function initDB(){
		
	}
}