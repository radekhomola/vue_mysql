<?php
include "config.php";
                                   
$condition = "1";
if(isset($_GET['userid'])){
   $condition = " id=".$_GET['userid'];
}                                                                         
$req = $con->query('SELECT * FROM `rozvozy_kde` WHERE '.$condition);                    
if ($req->num_rows > 0) {
    while ($row = $req->fetch_assoc()) {
        $response[] = $row;
    }
} else {
    return $response;
}
echo json_encode($response);