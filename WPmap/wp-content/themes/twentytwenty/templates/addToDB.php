<?php
include_once 'connectDB.php'; 
if(isset($_GET['reset']))
{
	mysqli_query( $conn, "DELETE FROM wp_map_info");
	mysqli_query( $conn, "ALTER TABLE wp_map_info AUTO_INCREMENT = 1");
}
elseif(isset($_GET['insert']))
{
   $sql = 'SELECT longitude, latitude FROM wp_map_info';
   $retval = mysqli_query( $conn, $sql );
   $rowCount = $_GET['quantity'];
   
   for ($i=0; $i < $rowCount; $i++) { 
   $lon = rand ( -180 , 80 );
   $lat = rand ( -90 , 90 );
   $test = "INSERT INTO `wp_map_info` (`longitude`, `latitude`) VALUES ( '$lon', '$lat')";
   mysqli_query( $conn, $test );
   }
} 
   //echo "<select>";
   //echo "<option>Saab</option>";
   //while($row = mysqli_fetch_assoc($retval)) {
   	//echo "<option>".$row['longitude']."</option>";
   	/*
      echo "longitude :{$row['longitude']}  <br> ".
         "latitude : {$row['latitude']} <br> ".
         "--------------------------------<br>";
    */
   //}
      //echo "</select>";
   header("Location: http://localhost/wpmap/map-pins-test/?$rowCount");

?>