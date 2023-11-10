<?php
include("dbcon.php");


function select_questions(){
    global $conn;
    $sql=" SELECT * FROM questions ORDER BY question_id"; 
$check= $conn->query($sql);
$checked=$check->fetchAll();
return $checked;
    

}

function select_options($question_id){
    global $conn;
    $sql=" SELECT * FROM options WHERE question_id='$question_id' ORDER BY option_id"; 
$check= $conn->query($sql);
$checked=$check->fetchAll();
return $checked;
}

function select_answers($question_id){
    global $conn;
    $sql=" SELECT * FROM answers WHERE question_id='$question_id' ORDER BY answer_id"; 
$check= $conn->query($sql);
$checked=$check->fetchAll();
return $checked;
}

function exam(){
    global $conn;
    $sql= " SELECT * FROM exams ORDER BY exam_id";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}

function subject(){
    global $conn;
    $sql= " SELECT * FROM subjects  ORDER BY subject_id";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}

function users(){
    global $conn;
    $sql= " SELECT * FROM users  ORDER BY user_id";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}
$i=1;

function option_type(){
    global $conn;
    $sql =" SELECT * FROM option_type ORDER BY option_id ";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}
function exam_type(){
    global $conn;
    $sql =" SELECT * FROM exam_type ORDER BY exam_id ";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}
function usersprofile($id){
    global $conn;
    $sql= " SELECT firstname FROM users WHERE user_id='$id'  ORDER BY user_id";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}
function select(){
    global $conn;
    $sql =" SELECT * FROM p_q ORDER BY p_id ";
    $check= $conn->query($sql);
     $checked=$check->fetchAll();
      return $checked;
}


function tat(){
    global $conn;
    $sql= " SELECT student_answers.question_id,student_answers.answer_id AS studentAnswer,answers.option_id AS correctAnswer FROM student_answers
    INNER JOIN answers ON answers.question_id=student_answers.question_id ";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}
function results($id){
    global $conn;
    $sql= "SELECT scores FROM scores WHERE scores=1 AND user_id='$id' ";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return count($checked);
}
function student(){
    global $conn;
    $sql= "SELECT user_id FROM users";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;

}
function practice_question(){
    global $conn;
    $sql= "SELECT * FROM practice ORDER BY practice_id";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}
function practice_option($practice_id){
    global $conn;
    $sql= "SELECT * FROM practice_options WHERE practice_id='$practice_id'";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}
function practice_answer($practice_id){
    global $conn;
    $sql= "SELECT * FROM practice_answers WHERE practice_id='$practice_id'";
    $check= $conn->query($sql);
    $checked=$check->fetchAll();
    return $checked;
}