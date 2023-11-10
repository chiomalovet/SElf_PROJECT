<?php
include "dbcon.php";
include "function.php";

if(isset($_POST['submit'])) {
    $questions=$_POST['question']; 
    $exam_id=$_POST['exam_id']; 
    $options_id=$_POST['option_id']; 
    $subject_id =$_POST['subject_id']; 
    $options = $_POST['option'];
    $answers = $_POST['answers'];
    if($answers == 'on'){
        $answers = 1;
        // die(var_dump($answers));
    }   
    
    
// die(var_dump($options));
 $sql=" INSERT INTO questions(question,subject_id,exam_id,option_id)
  VALUES('$questions','$exam_id','$subject_id','$options_id')";
  $conn->exec($sql);
 $question_id=$conn->lastInsertId();

    foreach($options as  $option) {
        $sql2= "INSERT INTO options(options, question_id)
        VALUES('$option', '$question_id')"; 
        // die(var_dump($options[$key]));
            $conn->exec($sql2);
            $option_id=$conn->lastInsertId();  
    }

    $sql= "INSERT INTO answers(answers,question_id,option_id)
    VALUES ('$answers','$question_id','$option_id')";
        $conn->exec($sql);
        $answer_id=$option_id;
 
        header("location:all.php");

}

if(isset($_POST["signup_btn"])){
    // $username=trim($_POST["uname"]);
    $firstname=trim($_POST["fname"]);
    $lastname=trim($_POST["lname"]);
    $email=trim($_POST["email"]);
    $password=trim($_POST["pass"]);
   $role= trim($_POST["role"]);
   
   if(!empty($role)){
    // die(var_dump($role));
    $sql= "INSERT INTO users(firstname,lastname,email,password,roles ) 
    VALUES ('$firstname',' $lastname',' $email',' $password','$role')";
    $conn->exec($sql);
    $return_id4=$conn->lastInsertId();
    header("location:index.php");
   }else{
    $sql2= "INSERT INTO users(firstname,lastname,email,password ) 
    VALUES ('$firstname',' $lastname',' $email',' $password')";
    $conn->exec($sql2);
    $return_id4=$conn->lastInsertId();
    header("location:index.php");
   }
} 
 if(isset($_POST["name_submit"])){
    $exam=$_POST["exam_name"];
    $exam_des=$_POST["exam_des"];
    $exam_date=$_POST["exam_date"];
    
    $sql= "INSERT INTO exams(exam_name,exam_description,exam_duration)
     VALUES('$exam','$exam_des','$exam_date')";
      $conn->exec($sql);
      $return_id=$conn->lastInsertId();
      header("location:subject.php");
     }
     
     if(isset($_POST["sub_submit"])){
        $subject=$_POST["sub_name"];
        $subject_des=$_POST["sub_des"];

        $sql= " INSERT INTO subjects(subject_name, subject_description) 
        VALUES ('$subject', '$subject_des')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        header("location:file-quest.php");
     }


    
    if(isset($_POST["upload"])){
       $folder_name= "chioma/";
       $questions=$_POST['question']; 
       $exam_id=$_POST['exam_id']; 
       $options_id=$_POST['option_id']; 
       $subject_id =$_POST['subject_id'];
       $options = $_POST['option'];
       $answers= $_POST['answers'];
        if(!file_exists($folder_name)){
             mkdir($folder_name,0755);
                    }
                     echo $filename=$_FILES["file"]["tmp_name"];
                         if($_FILES["file"]["size"] > 0)
                         {
                   $file = fopen($filename, "r");
                             while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
                             {
   $sql = "INSERT INTO questions (question,subject_id,exam_id,option_id) 
         values('$questions','$exam_id','$subject_id','$options_id')";   
                 $conn->exec($sql);
                  $question_id=$conn->lastInsertId();
                  foreach($options as $key=> $value) {
                     $sql2= "INSERT INTO options(options, question_id)
                           VALUES('$options[$key]', '$question_id[$key]')"; 
                              $conn->exec($sql2);
                                  $option_id=$conn->lastInsertId();
                                      }
                                      $sql3= "INSERT INTO answers(answers,question_id,option_id)
                                          VALUES ('$answers','$question_id','$option_id')";
                                             $conn->exec($sql3);
                                               $answer_id=$conn->lastInsertId();
                                if(! $question_id && $option_id && $answer_id )
                                {
                                    echo 'failed to upload'; 
                 
                                }
                 
                             }
                             fclose($file);
                            
                             echo  'sucessfully';     
                         }
                        }                      
    
          
    if(isset($_POST["option_submit"])){
        $option=$_POST["option_name"];

        $sql= " INSERT INTO option_type(option_name) 
        VALUES ('$option')";
        $conn->exec($sql);
        $return_id=$conn->lastInsertId();
        
     }
     if(isset($_POST["file-quest-submit"])){
        if(isset($_POST["files"])){
            header("location:file-subject-select.php");
        }
       if(isset($_POST["questions"])){
        header("location:exam-subject-select.php");
       }
        
     }
     
        
     if(isset($_POST["choose"])){
        if(isset($_POST["practice"])){
            header("location:practice-page-before.php");
        }
       if(isset($_POST["quiz"])){
        header("location:page-before.php");
       }
        
     }

    //  if(isset($_POST['submit_practice'])) {
    //     $questions=$_POST['question'];  
    //     $options = $_POST['option'];
    //     $answers = $_POST['answers'];
    //     if($answers == 'on'){
    //         $answers = 1;
    //         // die(var_dump($answers));
    //     }   
        
        
    // // die(var_dump($options));
    //  $sql=" INSERT INTO practice(practice_question)
    //   VALUES('$questions')";
    //   $conn->exec($sql);
    //  $practice_id=$conn->lastInsertId();
    
    //     foreach($options as  $option) {
    //         $sql2= "INSERT INTO practice_options(options, practice_id)
    //         VALUES('$option', '$practice_id')"; 
    //         // die(var_dump($options[$key]));
    //             $conn->exec($sql2);
    //             $practice_option_id=$conn->lastInsertId();  
    //     }
    
    //     $sql= "INSERT INTO practice_answers(answers,practice_id,practice_option_id)
    //     VALUES ('$answers','$practice_id','$practice_option_id')";
    //         $conn->exec($sql);
    //         $answer_id=$practice_option_id;
     
    //         header("location:practice-all.php");
    
    // }
   
?>



