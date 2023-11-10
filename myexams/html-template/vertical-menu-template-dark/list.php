<?php
include "dbcon.php";
$roles=$_POST["roles"];
// $status=$_POST["status"];

$y=[];

if($roles!==" "){
    global $conn;
    $sql= " SELECT  * FROM users WHERE user_id > 0";
     
}

$check=$conn->query($sql);
     $checked= $check->fetchAll();
     array_push($y,$checked);

     for($i=0; $i<count($checked); $i++){
        $btn="<span class='action-edit' title='Edit'><i class='feather icon-edit'></i></span><span class'action-delete del type-warning' title='Delete' onclick='dele(".$checked[$i]["user_id"].")'<i class='feather icon-trash'></i></span>";
         array_push($checked[$i],$btn);
    }

    $z=[];
    array_push($z,$checkec,$y);
    echo json_encode($z);
?>