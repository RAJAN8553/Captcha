<?php
	$conn= mysqli_connect("localhost","root","","captcha");
	if($conn === false)
	{
		die ("Database Not Connect : ". mysqli_connect_error());
	}
	$sql = "select logo_name from logo ORDER BY RAND() LIMIT 6";
	$name = mysqli_query($conn,$sql);

	if(! $name ) {
      die('Could not get data: ' . mysqli_error());
   }
   $a = array();

   while($row = mysqli_fetch_array($name))
   {
   		array_push($a, $row["logo_name"]);
   }
   
   print_r($a) ;
	echo    
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);


?>


