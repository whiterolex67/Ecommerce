<?php
$connection = new mysqli('localhost', 'root', 'Eshu@123', 'shoppingApplication');
if(!$connection){
    die(mysqli_error($connection));
}
?>