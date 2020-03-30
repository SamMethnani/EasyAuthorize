<?php

session_start();
  require_once('connection.php');

  if (isset($_GET['core']) && isset($_GET['action'])) {
    $core = $_GET['core'];
    $action= $_GET['action'];
  } else {
    $core = 'client'; 
    $action = 'signin_signup'; 
  }

  require_once('views/layout.php');
?>
