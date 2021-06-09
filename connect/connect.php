<?php 
    $conn = mysqli_connect('localhost','root','','dpst');

    if(!$conn){
        die("Connect failed". mysqli_connect_error());
    }

?>