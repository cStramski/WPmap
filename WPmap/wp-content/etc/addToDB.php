<?php
include_once 'connectDB.php'; 
if(isset($_GET['reset']))
{
	mysqli_query( $conn, "DELETE FROM mappins");
	mysqli_query( $conn, "ALTER TABLE mappins AUTO_INCREMENT = 1");
}
elseif(isset($_GET['insert']))
{
   $sql = 'SELECT longitude, latitude FROM mappins';
   $retval = mysqli_query( $conn, $sql );
   $rowCount = $_GET['quantity'];
   
   for ($i=0; $i < $rowCount; $i++) { 
   $lon = rand ( -180 , 80 );
   $lat = rand ( -90 , 90 );
   $test = "INSERT INTO `mappins` (`longitude`, `latitude`) VALUES ( '$lon', '$lat')";
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
   header("Location: http://www.localhost/wpmap/map-pins-test?$rowCount");

?>