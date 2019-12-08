<?php
include_once "../base.php";

//取得要編輯資料的資料表名稱
$table=$_POST['table'];
$type=$_POST['type'];

//判斷是否有成功上傳檔案，進行取得檔名及搬移檔案的動作
if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
}

//依據資料表來做不同的處理
switch($table){
  case "title":
    if(!empty($_POST['title']) && !empty($_POST['text'])){
        $data["title"]=$_POST['title'];
        $data["text"]=$_POST['text'];
    }
  break;
  case "info":
    if(!empty($_POST['name']) ){
        $data["name"]=$_POST['name'];
        $data["birthday"]=$_POST['birthday'];
        $data["tel"]=$_POST['tel'];
        $data["addr"]=$_POST['addr'];
        $data["email"]=$_POST['email'];
        $data["intro"]=$_POST['intro'];
    }
  break;
  case "gallery":
    if(!empty($_POST['type'])){
/*     if(!empty($_POST['title']) && !empty($_POST['text'])){       */
        $data["title"]=$_POST['title'];
        $data["text"]=$_POST['text'];
        $data["type"]=$_POST['type'];
        $data["link"]=$_POST['link'];
    }
  break;
  case "admin":
    if(!empty($_POST['acc']) && !empty($_POST['pw'])){
        $data["acc"]=$_POST['acc'];
        $data["pw"]=$_POST['pw'];
    }
  break;
  case "menu":
    if(!empty($_POST['text']) && !empty($_POST['href'])){
        $data["text"]=$_POST['text'];
        $data["href"]=$_POST['href'];
    }
  break;
  default:
    //判斷是否有傳遞text欄位的資料，有的話就進行資料的取得
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }  
}

  //利用save()函式將存在$data陣列中的資料寫入資料表中
  save($table,$data);  

  if(!empty($_POST['type'])){
    to("../admin.php?do=$table&type=$type");
}else{

    to("../admin.php?do=$table");
}

?>