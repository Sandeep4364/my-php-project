<?php 
include "connect.php";
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header ("Location: display.php");
    } else {
        die ( mysqli_error($con));
    }
}
?>