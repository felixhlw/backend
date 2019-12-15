<?php
include_once "./base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary Meta Tags -->
    <title>Felix個人履歷資訊網</title>
    <meta name="title" content="Felix個人履歷資訊網">
    <meta name="description" content="Felix個人履歷資訊網">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="Felix個人履歷資訊網">
    <meta property="og:description" content="Felix個人履歷資訊網">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Felix個人履歷資訊網">
    <meta property="twitter:description" content="Felix個人履歷資訊網">
    <meta property="twitter:image" content="">

	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/front.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script src="./js/js.js"></script>

</head>

<body>
<div  style="width:100vw;height:100vh;margin:auto;display:flex;justify-content:center;align-items:center;">
    <div id="cover" style="display:none; ">
        <div id="coverr">
        <a class="close" style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
            onclick="cl(&#39;#cover&#39;)">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M17.953 7.453L13.422 12l4.531 4.547-1.406 1.406L12 13.422l-4.547 4.531-1.406-1.406L10.578 12 6.047 7.453l1.406-1.406L12 10.578l4.547-4.531z" fill-rule="evenodd"></path></svg>
        </a>
        <div id="cvr" style="z-index:9898;"></div>
        </div>
    </div>
    <div id="cover2" style="display:none; ">
        <div id="coverr2">
        <a class="close" style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
            onclick="cl(&#39;#cover2&#39;)">
            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg"><path d="M17.953 7.453L13.422 12l4.531 4.547-1.406 1.406L12 13.422l-4.547 4.531-1.406-1.406L10.578 12 6.047 7.453l1.406-1.406L12 10.578l4.547-4.531z" fill-rule="evenodd"></path></svg>
        </a>
        <div id="cvr2" style="z-index:9898;"></div>
        </div>
    </div>
 
    <!-- 這個container是必要的唷 -->
    <div class="container " id="resume">
        <div class="row " >
            <!-- 左邊的選單欄位 -->
            <div class="col-3 my-3 " id="menu">
                    <div >
                        <?php
                        include "./front/title.php";
                        ?>
                    </div>
                    <!-- 社群icon -->
                    <div class="col-12">

                        <ul class="nav justify-content-center ">
                            <li class="nav-item ">
                                <a class="nav-link text-white active mx-2" href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white active mx-2" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mx-2" href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white mx-2" href="#">
                                    <i class="fab fa-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- 選單列 -->
                    <div class="col-12 ">
                        <div class=" justify-content-center sub">
<?php
                       $do=(!empty($_GET['do']))?$_GET['do']:"info";
                       $main=all("menu",['parent'=>0,'sh'=>1]);
				    		foreach ($main as $k => $m) {

                              echo "<li><a href='".$m['href']."' id='".explode("=",$m['href'])[1]."'>".$m['text']."</a></li>";

                            }
?>
 <!--                        <li>
                            <a href="?do=info" id="info">個人簡介 / About Me</a>
                        </li>
                        <li>
                            <a href="?do=cond" id="cond">求職條件 / Job & Position</a>
                        </li>
                        <li>
                            <a href="?do=skill" id="skill">技能 / My Sill</a>
                        </li>
                        <li>
                            <a href="?do=history" id="history">經歷 / Experience</a>
                        </li>
                        <li>
                            <a href="?do=school" id="school">學歷 / Education</a>
                        </li>
                        <li>
                            <a href="?do=project" id="project">參與專案 / Project</a>
                        </li>
                        <li>
                            <a href="?do=gallery" id="gallery">作品集 / Gallery</a>
                        </li>
                        <li>
                            <a href="?do=doc" id="doc">自傳 / Autobiography</a>
                        </li>   -->  
                        </div>
                    </div>
                    <!-- <div class="col-4"></div> -->
                    <div class="row  ">
                        <div class="col-12 admin   "> &copy; <script>
                                document.write(new Date().getFullYear())
                            </script>&emsp;|

                <?php
					if (!empty($_SESSION['login'])) {
					?>
						<a href="admin.php">返回管理</a>
  					<?php
					}else{
					?>

                    <!-- <a href="?do=login" id="login">管理登入</a> -->
                    <a href="?do=login" id="login">管理登入</a>
                    
					<?php
					}
				?>                    
                        </div>
                    </div>
            </div>
            <!-- 內容區 -->
            <div class="col-9 my-3" id="content" >
                <div class="container mt-3 " >
                    <!-- <div class="row" id="show"></div> -->
            <?php
                //利用網址傳值的方式來取得$_GET['do']的值，這個值代表我們要include進來的檔案
                $do=(!empty($_GET['do']))?$_GET['do']:"info";
                $type=(!empty($_GET['type']))?$_GET['type']:"video";

                //我們將所有要include進來的後台功能檔案都放在 ./admin 目錄下，因此根據GET的值來組合include檔的完整路徑
                $path="./front/" . $do . ".php";

                //判斷檔案是否存在來決定是要匯入檔案還是預設匯入title.php
                if(file_exists($path)){
                  include $path;
                }else{
                  include "./front/title.php";
                }
               /* echo $do; */
            ?>    
                   <!--  </div> -->
                </div>
            </div>
        </div>

    </div>


</div> 

</body>


    <script>
/*         $(window).on('load', function () {
            $("#loading").fadeOut(2000, function () {
                $("#content").fadeIn();
                $("#footer").fadeIn();
                new WOW().init()
            });
        }) */
    var show ="#<?php echo $do ?>";
    /* alert(show);  */
    console.log(show);

    $(window).on('load', function () {
    $(show).siblings().removeClass("menushow").addClass("sub a"); 
    $(show).removeClass("sub a").addClass("menushow");
/*    $(show).on("click",function(){
        $(this).addClass("menushow"); */            
    new WOW().init()
    })        
/*     $(function(){
    }) */
    </script>

</html>


