<?php 
include_once "../base.php";
  if(!empty($_POST)){
    $acc=$_POST['acc'];
    $pw=$_POST['pw'];
    $chk=nums("admin",["acc"=>$acc,"pw"=>$pw]);

    if ($chk>=1) {
      $_SESSION['login']=1;
      to("../admin.php?do=info"); 
    }else{
      echo "<script>alert('帳號或密碼錯誤')</script>";
    }
    }
  
  ?>