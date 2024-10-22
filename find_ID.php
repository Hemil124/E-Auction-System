<?php
function find_sellerID($email)
{
    include 'connection.php';
    $result= mysqli_query($conn, "select id from tblsellers where email='$email'");
    $id= mysqli_fetch_array($result);
    if($id[0]){
        return $id[0];
    }else{
        return null;
    }
}

function find_bidderID($email)
{
    include 'connection.php';
    $result= mysqli_query($conn, "select id from tblbidders where email='$email'");
    $id= mysqli_fetch_array($result);
    if(isset($id)){
        return $id[0];
    }else{
        return null;
    }
}
?>
