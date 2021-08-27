<?php

$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'crud');

if (!$con) {
	echo "Not connected please try again letter";
}
?>