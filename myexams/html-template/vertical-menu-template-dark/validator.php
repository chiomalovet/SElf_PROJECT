<?php
include "dbcon.php";
session_start();

$email= $_POST["email"];
$sql=" SELECT * FROM users WHERE  trim(email)='$email'";
 $check=$conn->query($sql);
 $checked=$check->fetchAll();
 $row = count($checked);
if($row > 0 ){
    echo "user email exist";
}else{
    echo "";
}

if(isset($_POST["login_btn"])){
    $email=trim($_POST["email"]);
    $password=trim($_POST["password"]);
    $sql="SELECT * FROM users WHERE trim(email)='$email' AND trim(password)='$password'";
    $check=$conn->query($sql);
    $checked=$check->fetchAll();
    $row = count($checked);

    $sql2="SELECT roles FROM users WHERE trim(email)='$email' AND trim(password)='$password'";
 $check2=$conn->query($sql2);
 $checked2=$check2->fetch();

 $sql3="SELECT user_id FROM users WHERE trim(email)='$email' AND trim(password)='$password'";
 $check3=$conn->query($sql3);
 $checked3=$check3->fetch();

 $sql4="SELECT password FROM users WHERE  trim(password)='$password'";
 $check4=$conn->query($sql4);
 $checked4=$check4->fetch();

 $sql5="SELECT email FROM users WHERE trim(email)='$email'";
 $check5=$conn->query($sql5);
 $checked5=$check5->fetch();
 
//  die(var_dump($checked5));

    
    if($row> 0){
    
        if($checked2[0]=="director"){ 
            
            $_SESSION['user_id']=$checked3[0];
            header("location:dashboard.php");
        }else{
            
            $_SESSION['user_id']=$checked3[0];
                header("location:exam-type.php");
        }
        
    }else{
        if($checked4!=$password){
            $_SESSION['msg1'] = "wrong password";
            // die(var_dump($checked5));
        }else{
    
        $_SESSION['msg1'] = "wrong email";
        }
        header("location:index.php");
    }
        
    

}


?>
 
            
     