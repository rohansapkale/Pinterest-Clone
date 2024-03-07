<?php
$conn = mysqli_connect('localhost','root','','pinterest');
function sweetAlert($statement){
    echo "<script>alert('$statement');</script>";
 }
?>