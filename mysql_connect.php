<?php
//$servername = "localhost";
//$username = "root";
//$password = "nitzan";
//
//$conn = mysqli_connect($servername, $username, $password);
//
//if (!$conn) {
//	die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
$data['firstName'] = 'Nitzan';
$data['lastName'] = 'Ben Ner';
$data['email'] = 'nitzanbenner@gmail.com';
$data['firstName'] = 'Roni';
$data['lastName'] = 'shavit';
$data['email'] = 'roni.shavit208@gmail.com';
echo json_encode($data);
?>