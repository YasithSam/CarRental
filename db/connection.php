<?php

class DBController
{
   protected $host='localhost';
   protected $user='root';
   protected $password='';
   protected $database='car_rental';

   public $con=null;
   //constructor
   public function __construct()
   {
       $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
       if($this->con->connect_error){
           echo "Fail ". $this->con->connect_error;
       }
       echo 'connection successfull';


   }
   //destuctor
   public function _destructor()
   {
       $this->closedConnection();

   }
   // loosing connection
   protected function closedConnection()
   {
       if($this->con!=null)
       {
           $this->con->close();
           $this->con=null;
       }

   }

}


?>