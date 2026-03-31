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
<th>email
</th>
<th>address
</th>
<th>Amount
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
$query="select * from funds ";
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
<td><?php echo $row['email'];?>
</td>
<td><?php echo $row['addr'];?>
</td>
<td><?php echo $row['cnum'];?>
</td>


</td>

<?php } ?>
</tbody>
</table>