<?php
include("../include/connection.php");

if(isset($_POST['status'])){

    $status=$_POST['status'];
    $id=$_POST['id'];

    $query="UPDATE doctor SET status='$status' WHERE ID='$id'";

    $res=mysqli_query($conn,$query);

    echo 1;
    exit;
}

else echo 0;

?>


