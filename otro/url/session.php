<?php
   include('conexion.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select usuario from usuarios where usuario = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usuario'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>