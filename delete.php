<?php 
  require 'classes/Database.php';
  require 'classes/User.php';

  $database = new Database();
  $conn = $database->getdb(); 
  
  $id = $_GET['id'];
  if ( User::deleteOne( $conn , $id ) ) {
    header( "Location: index.php" );
  };
  
  
?>