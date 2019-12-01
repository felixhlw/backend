<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=upload";
$pdo=new PDO($dsn,"root","");
?>

<script>
function loadpage(page) {
    /*  $.get("./results/"+page,function(res){
        console.log(res)
      $(".content").html(res)  
      }
      ) */
    $(".content").load("./admin/" + page) //最簡潔的模式，就這一行~

  }

  </script>