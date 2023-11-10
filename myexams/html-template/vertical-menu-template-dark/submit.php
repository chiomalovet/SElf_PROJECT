<?php
include "dbcon.php";
include "function.php";


if(isset($_POST["submit_answers"])){
    $questions=$_POST["question_id"];
    $answers=$_POST["answer_id"];
    
      foreach($questions as $key=>$value){
        
      $sql= "INSERT INTO student_answers(question_id,answer_id)
      VALUES ('$questions[$key]','$answers[$key]') ";
      $conn->exec($sql);
      $return_id=$conn->lastInsertId();
      }
      
     $tacts=tat();
     
    
foreach($tacts as $key=> $tact){
  
   $student_answer= $tact["studentAnswer"];
   $admin_answer= $tact["correctAnswer"];
   $user_id=$_POST["user_id"];
  //  die(var_dump($student_answer,$admin_answer));

  if($student_answer==$admin_answer){
    $score=1;
  }else{
    $score =0;
  }

    $sql2="INSERT INTO scores (scores,user_id) VALUES ('$score','$user_id[$key]')";
    $conn->exec($sql2);
    $return_id2=$conn->lastInsertId();
     
    header("location:result.php");
}  
}
  if(isset($_POST["opt"])){
    $sql= " SELECT practice_option_id FROM practice_answers ";
    die(var_dump($sql));
    $check=$conn->query($sql);
    $checked= $check->fetchAll();
    echo json_encode($checked);
  }    
    
    
       
    
?>