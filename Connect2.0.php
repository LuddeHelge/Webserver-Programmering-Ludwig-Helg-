
<?php
$dbh= new mysqli("localhost","dbuser","qwe123","webbshop");


if(!$dbh){
	echo "Connection failed!";
	exit;
}