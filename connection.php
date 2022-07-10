<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "z_t_dabtbase2(1)";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
