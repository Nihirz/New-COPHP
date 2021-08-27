<?php

include 'conn.php';

$id = $_GET['sno'];

$q = " DELETE FROM `crud` WHERE sno = $id ";

mysqli_query($con, $q);

header('location:display.php');

?>
<!-- 
$deleteItems = $_POST['items'];
foreach ($deleteItems as $s)
{
    $str = $s;
    mysqli_query($con,"DELETE FROM table WHERE id='$str'")or die(mysqli_error($con));
}
header("location: manage_menu.php");
exit(); -->