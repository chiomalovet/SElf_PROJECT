<?php 
include "function.php"; 
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Chat Application - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/app-chat.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <script src="../../exams.js"></script>
    <script src="../../jquery-3.6.1.min.js"></script>
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout content-left-sidebar chat-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar" data-layout="dark-layout">
<script>
                function namez(id,idd){
                var x = document.getElementById(id).value;
                var y = document.getElementById(idd).value = x;
            
                }
            </script>
    <!-- BEGIN: Header-->
    <?php include "user-nav.php" ?>
    
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true bg-danger">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="../html/ltr/vertical-menu-template-dark/index.html">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Vuexy</h2>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        
                <?php
                include "user-menu.php"
                ?>
                
                
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    
    
    
    
     <div class="app-content content" style="background-color:black">
        <div class="content-overlay"></div>
        <!-- <div class="header-navbar-shadow"></div> -->
        <div class="content-wrapper">
            <div class="content-body" >
        <input type="hidden" id="demo" >
        <form  action="submit.php" method="post" id="myform" class="myform" >
        <section id="tooltip-events">
                    <div class="row ">
                        <div class="col-12">
                            <div class="card-header">
                                    <h4 class="card-title" id="status"></h4>
                                </div>
                    <?php $questions= select_questions();?>
                    <input type="hidden" value="<?php echo $_SESSION['user_id']?>" name="user_id[]"  class="user_id">
         <?php foreach($questions as $question){
           ?>
        <p><?php echo $i++. ", " . $question["question"]; ?></p>
        <input type="hidden" value='<?php echo ($question['question_id']);?>' name="question_id[]"  class="question_id">
        <input type="hidden" id='<?php echo ($question['question_id']);?>' name="answer_id[]"  class="answer_id">
       
       
        <?php $options= select_options($question['question_id']);
         foreach($options as $opt){?>
            <?php echo "<input type='radio' id='opt$opt[option_id]' onchange=namez('opt".$opt['option_id']."','".$question['question_id']."') name='opt$opt[question_id][]' value='$opt[option_id]'" ; ?>
            <label> <?php echo $opt['options']."<br>"?> </label>
        <?php } ?>
       <?php }  ?>
       
       <button class="btn btn-primary"  name ="submit_answers" value = "SUBMIT" type="submit" style="margin-top: 20px; margin-left:10px">Submit</button>
        </form>
            </div>
        </div>
         </div>
         </div>
     </div>
     </section>
    <!-- END: Content-->
               
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->
    <script>
        function ajaxfn(btn,y,z,u){
    $.ajax({
      url      : "submit.php",
      type     : "POST",
      dataType :"json",
      data     : {
           "submit_answers": btn,
           "question_id" : y,
           "answer_id" : z,
           "user_id":u
      },
    success: function(reply) {
        window.location = "result.php";
    }
  })
  }
var timeleft = 10; 
var downloadTimer = setInterval(function(){ 
  document.getElementById("status").innerHTML="<h2>You have <b>"+timeleft+"</b> seconds to answer the questions</h2>"; 
  
  if(timeleft == 0){ 
    clearInterval(downloadTimer);
    
     var btn=document.getElementById("submit").value;
     var qid=document.getElementsByClassName("question_id");
     var aid=document.getElementsByClassName("answer_id"); 
     var uid=document.getElementsByClassName("user_id"); 
     let y=[] ;
     let z=[];
     let u=[];
     for(i=0; i<qid.length; i++){
       y.push(qid[i].value)
     }
     for(j=0; j<aid.length; j++){
      z.push(aid[j].value)
      }   
      for(k=0; k<uid.length; k++){
       u.push(uid[k].value)
     } 
      ajaxfn(btn,y,z,u); 
      
       } else { 
        
        document.getElementById("demo").innerHTML= timeleft; } 
timeleft --; 
}, 1000);

    </script>

    <!-- BEGIN: Vendor JS-->
    <script src="../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../app-assets/js/core/app-menu.js"></script>
    <script src="../app-assets/js/core/app.js"></script>
    <script src="../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../app-assets/js/scripts/pages/app-chat.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>