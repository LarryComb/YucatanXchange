<?php
include "./include/db.php";

//var_dump([$db_host, $db_user, $db_pass]);

// connect to db
$conn = mysqli_connect($db_host, $db_user, $db_pass);

if(!$conn) {
    die('Connection Failed: '. mysqli_connect_error());
}

mysqli_select_db($conn, $db_name) or die(mysqli_error($conn));

// if map is in Startup Genome mode, check for new data
if($sg_enabled) {
  require_once("include/http.php");
  include_once("startupgenome_get.php");
}

// input parsing
function parseInput($value) {
  $value = htmlspecialchars($value, ENT_QUOTES);
  $value = str_replace("\r", "", $value);
  $value = str_replace("\n", "", $value);
  return $value;
}

