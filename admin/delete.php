<?php
    include 'connection_admin.php';
    $ids = $_GET['id'];
    $deletequery = "DELETE FROM `contact` WHERE id=$ids";
    $showdata = mysqli_query($conn,$deletequery);
    if ($showdata) {
        ?><script>alert('Data Deleted Successfully');</script><?php
        header('location:contact.php');
    } else {
        ?><script>alert('!!!Data Not Daleted Properly!!!');</script><?php
    }
?>