<?php
include_once 'connectDB.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	    <?php 
      	$sql = 'SELECT longitude FROM wp_map_info';
   		$retval = mysqli_query( $conn, $sql );
   		$indexer = 0;
   		echo "<select hidden>";
   		while($row = mysqli_fetch_assoc($retval)) {
   			echo '<option id="lon'.$indexer.'">'.$row['longitude']."</option>";
   			$indexer++;
   		}
   		echo"</select>";

   		$indexer = 0;
   		$sql = 'SELECT latitude FROM wp_map_info';
   		$retval = mysqli_query( $conn, $sql );
   		echo "<select hidden>";
   		while($row = mysqli_fetch_assoc($retval)) {
   			echo '<option id="lat'.$indexer.'">'.$row['latitude']."</option>";
   			$indexer++;
   		}
   		echo"</select>";
      	?>
    <title>Map Pins</title>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFhIdMcD8rIew_uXFKndm6j0ACKhB1oxs&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;
        /* The height is 400 pixels */
        width: 50%;
        /* The width is the width of the web page */
      }
    </style>
    <script>
      // Initialize and add the map
      function initMap() {
      	let uluru = { lat: 42, lng: 25};
  			//alert(document.getElementById("lon"+i).value)
        // The location of Uluru
        
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: uluru,
        });
        // The marker, positioned at Uluru
        if (+document.getElementById("count").innerHTML>0) {
        for (i = 0; i < +document.getElementById("count").innerHTML; i++) {
        	let testR = { lat: +document.getElementById("lon"+i).value, lng: +document.getElementById("lat"+i).value};
        new google.maps.Marker({
          position: testR,
          map: map,
        });
		}
	}     
      }
    </script>
  </head>
<body>
<form action="../wp-content/themes/twentytwenty/templates/addToDB.php" method="GET">
  <label for="quantity">Insert this many rows into the db(1-1000):</label>
  <input type="number" id="quantity" name="quantity" min="1" max="10000">
  <input type="submit" name="insert" value="Insert">
  <input type="submit" name="reset" value="Reset DB">
</form>
<?php
$query = "SELECT * FROM wp_map_info"; 
      
    // Execute the query and store the result set 
    $result = mysqli_query($conn, $query); 
      
    if ($result) 
    { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result); 
          
           if ($row) 
              { 
                 printf("Number of rows currently in the table : ". '<p id="count">'.$row.'</p>'); 
              } 
           else{
    	printf("No rows currently present in the table"); 
    	}
        // close the result. 
        mysqli_free_result($result); 
    } 

?>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
</body>
</html>