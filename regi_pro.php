<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donation";
$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) 
{
  	die("Connection failed: " . $conn->connect_error);
}

		//echo "Connected successfully";
        $query="insert into regi(name,mobile_no,don_type,address,msg) values('$_POST[nm]','$_POST[mb]','$_POST[donation]','$_POST[addr]','$_POST[msg]')";
				
		 			mysqli_query($conn,$query);
		 			echo "Record Saved";
                   header("location:index.html");


?>