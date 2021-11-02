<?php
  $db_host = '127.0.0.1';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'listening_test';
  $db_port = 3306;

  $con = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db,
	$db_port
  );
	
  if ($con->connect_error) {
    echo 'Errno: '.$con->connect_errno;
    echo '<br>';
    echo 'Error: '.$con->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$con->host_info;
  echo '<br>';
  echo 'Protocol version: '.$con->protocol_version;

?>