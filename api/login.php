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
      echo "<script>
            var yes = confirm('帳號或密碼錯誤，返回重試?');      
            if(yes){
              window.location.replace('../index.php?do=login')
            }else{
              window.location.replace('../index.php')
            }
        
        </script>";
/*       echo "<script>alert('帳號或密碼錯誤',function(){
        document.location.href='../index.php?do=login'})</script>"; */
      
    }
    }
  
  ?>