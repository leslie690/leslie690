<?php

$ServerName = 'localhost';
$Username = 'root';
$Password = '';
$Name = 'project 2023';

$conn = mysqli_connect($ServerName, $Username, $Password, $Name);
echo "connected successfully";

?>