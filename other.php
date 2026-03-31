<style type="text/css">
table {
border-collapse: collapse;
width: 100%;
color: #d96459;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #d96459;
color: white;
}
</style>



<table class="table table-bordered">
<thead>
                            <tr>
<th>id
</th>
<th>Name
</th>
<th>mobile_no
</th>
<th>don_type
</th>
<th>address
</th>
<th>msg
</th>
<th>date of donation
</th>
</tr>
                        </thead>
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
$query="select * from regi ";
				//echo $query;
$result=$conn->query($query);
                        while($row=$result->fetch_assoc())
                        {
                          ?>
<tbody>
<td><?php echo $row['id'];?>
</td>
<td><?php echo $row['name'];?>
</td>
<td><?php echo $row['mobile_no'];?>
</td>
<td><?php echo $row['don_type'];?>
</td>
<td><?php echo $row['address'];?>
</td>
<td><?php echo $row['msg'];?>
</td>
<td><?php echo $row['date'];?>
</td>
<?php } ?>
</tbody>
</table>