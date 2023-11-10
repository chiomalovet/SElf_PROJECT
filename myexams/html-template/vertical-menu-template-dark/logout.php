<?php
session_start();
unset($_SESSION["id"]);
session_destroy(); //destroy the session
header("location:index.php");
?>