<html>
<Head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>

<table>
  <tr>
    <th>Produkt</th>
    <th>Beskrivning</th>
    <th>Bild</th>
	<th>Pris</th>
  </tr>
  
<?php
$db= new mysqli("localhost","dbuser","qwe123","webbshop");


if(!$db){
	echo "Connection failed!";
	exit;
}

$sql="SELECT * FROM products";

$result = $db->query($sql);

while($row=$result->fetch_assoc()){
	echo "<tr>";
	
    echo "<td>";
	echo $row['name'];
    echo "</td>";
	
	echo "<td>";
	echo $row['description'];
    echo "</td>";
	
	echo "<td>";
	echo $row['price'];
    echo "</td>";
	
	echo "<td>";
	echo  $row['picture'];
    echo "</td>";
	
	echo "</tr>";
	

}


mysqli_close($db);

?>
</table>

</body>
</html>


