<?php
$db= new mysqli("localhost","dbuser","qwe123","webbshop");


if(!$db){
	echo "Connection failed!";
	exit;
}

$sql="SELECT * FROM products";

$result = $db->query($sql);

while($row=$result->fetch_assoc()){
	echo $row['name'];
	echo ", ";
	echo $row['description'];
	echo ", ";
	echo $row['price'];
	echo ", ";
	echo $row['picture'];
	echo "<br>";
}


mysqli_close($db);

?>