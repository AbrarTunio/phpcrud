<?php 

class Database
{
    public function getdb(){
      $conn = mysqli_connect( "localhost" , 'root' , "" , 'dbms'  );
      return $conn;  
    } 
}