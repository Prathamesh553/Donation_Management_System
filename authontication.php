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
$query="select * from admin where email='".$_POST['adminUserName']."'";
				echo $query;
				$result=$conn->query($query);
			
			
				$row=$result->fetch_assoc();
				if($row['password']==$_POST['adminPassword'])
				{
					
					//$_SESSION['user']=$_POST['em'];
					//$_SESSION['name']=$row['user_name'];
					//$_SESSION['phone_no']=$row['phone_no'];
					//$_SESSION['email']=$row['email'];
                    
                    //echo $_SESSION['user'];
					header("location:admin.html");
					//header("location:index.php");
				}
				else
					{header("location:login.html?login=failed");
					} 
                    
                if(isset($_SESSION['user']))
                    {
                    echo $_SESSION['user'];
                    }
                    else{echo 'no';
}
?>