<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bloodbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Veritabanına bağlanılamadı!' .mysql_error());
}
?>