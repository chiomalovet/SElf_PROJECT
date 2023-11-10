<?php
       $edit=$_POST["edit"];
    global $conn;
    $sql= " SELECT  exam_name, exam_description, exam_duration FROM exams ORDER BY exam_id ";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    die(var_dump($checked)) ;

?>