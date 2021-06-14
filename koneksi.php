<?php

$con = mysqli_connect("localhost","root", "", "2055301019_UAS"); 

if (mysqli_connect_errno($con))
   {
   echo "Failed to connect to MySQL: " .
mysqli_connect_error();
   }
else
   {
   echo "Berhasil Terhubung!";
   }
?>