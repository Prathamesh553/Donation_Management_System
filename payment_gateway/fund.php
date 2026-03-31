

<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Contact Section -->
<head>
<link rel="stylesheet" href="donate.css">


</head>
<body>
<div class="bg-img"></div>

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
        $query="insert into funds(name,email,addr,city,state,zip,cname,cnum,emonth,year,cvv) values('$_POST[nm]','$_POST[em]','$_POST[addr]','$_POST[city]','$_POST[state]','$_POST[zip]','$_POST[cname]','$_POST[cnum]','$_POST[emonth]','$_POST[year]','$_POST[cvv]')";
				
		 			mysqli_query($conn,$query);
		 			echo "Record Saved";
                   //header("location:index.html");


?>
        <section class="contact-section" id="contact">
            <div class="container">
                <div class="heading">
                    <h2>Certificate</h2>
                    <div class="field space">
                                            </div>
                    <p>Our accomplishment could not be archeived without generous support of donars like you.Your support and donation provide the financial and moral support needed to continue our mission.This certificate is proudly presented to<span><?php echo $_POST['nm'] ?></span> </p>
                </div>
<div class="field space">
                                            </div>


                <div class="row">
                    <div class="col-lg-12 mt-5">
                      
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                
                                            </div>
                                            <div class="field space">
                                            </div>
                                            <div class="col-lg-12">
                                                
                                            </div>
<div class="field space">
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    
                                                </div>
                                            </div>
<div class="field space">
                                            </div>
                                            
                                        </div>
                                        <div class="col-lg-6">
                                            
<div class="field space">
                                            </div>
                                            
                                        </div>
<div class="field space">
                                            </div>
                                        <div class="col-md-12 mt-3">
<img src="rushi3.jpg" alt="Flowers in Chania" style="width:50px;height:50px;">
<br>
Sign<br>
<?php $query1="select * from regi where name='".$_POST['nm']."'";
				//echo $query1;
				$result1=$conn->query($query1);
      while($row1=$result1->fetch_assoc())
      {
echo $row1['date'];
                                     
}
?>       

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        </section>
</body>
</html>
