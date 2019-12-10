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
    <meta property="og:image" content="./images/banner-image_14.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="Felix個人履歷資訊網">
    <meta property="twitter:description" content="Felix個人履歷資訊網">
    <meta property="twitter:image" content="./images/banner-image_14.jpg">

	<link href="img/favicon.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/front.css">
    <link rel="stylesheet" href="./css/animate.css">

</head>

<body>
    <!-- nav選單 -->
<!--     <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">

            <a class="navbar-brand" href="#">
                <img src="./images/coffee-cup.png" width="30" height="30" class="d-inline-block align-top" alt="">
                東山咖啡
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.htm"><i class="fas fa-home"></i> 首頁 <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tour.htm"><i class="fas fa-tree"></i>景點介紹</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./shop.htm"><i class="fas fa-shopping-cart"></i>商品介紹</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav> -->
    <!-- 載入畫面 -->
 <!--    <div class="container-fluid" id="loading"> 
        <div class="row h-100">
            <div class="col-12 align-self-center text-center">
                <img src="./images/dog.svg" alt="">
            </div>
        </div>
    </div> -->

    <!-- 這個container是必要的唷 -->
    <div class="container" id="resume">
        <div class="row" >
            <div class="col-3 my-3 " id="menu">
                    <div>
                        <?php
                        include "./front/title.php";
                        ?>
                    </div>
                    <div class="col-12">

                        <ul class="nav justify-content-center">
                            <li class="nav-item ">
                                <a class="nav-link text-white active" href="#">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white active" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">
                                    <i class="fab fa-line"></i>
                                </a>
                            </li>
                        </ul>
 

                    
                    <!-- <div class="col-4"></div> -->
                    <div class="col-12 align-self-center sub">
                        <li>
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
                        </li>    
                    </div>
                    <!-- <div class="col-4"></div> -->
                    </div>
                    <div class="copy"> &copy; <script>
                                document.write(new Date().getFullYear())
                            </script> Felix Wang </div>
               
            </div>
            <div class="col-9 my-3" id="content" >
                <div class="container my-3 show" >
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
               /*  echo $do */
            ?>    
                   <!--  </div> -->
                </div>
            </div>
        </div>
        

        <!-- 用row做一個區塊內容 -->
        <div class="row fadeInUp wow">
            <div class="col-12 my-3">
                <h1 class="text-center text-white">咖啡介紹</h1>
                <hr class="bg-white">
            </div>
        </div>
        <!-- 用row做一個區塊內容 -->
        <div class="row coffee fadeInLeft wow">
            <div class="col-12 col-md-5 my-3">
                <img src="./images/banner-image_10.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
                <h1>咖啡的好與壞</h1>
                <p>有發現越來越多咖啡連鎖店一家家開，
                        顯見咖啡已涉入現代人生活中，
                        咖啡會如此流行.迷人，那有沒有想過咖啡裡是怎樣的物質呢？
                        對人體是好與壞呢?!
                </p>
            </div>
        </div>
        <!-- 用row做一個區塊內容 -->
        <div class="row coffee fadeInRight wow">
            <div class="col-12 col-md-5 my-3">
                <img src="./images/banner-image_17.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
                <h1>喝咖啡的好處</h1>
                <p>根據美國俄亥俄州立大學1994年的研究，咖啡因的確能提高清醒度，
                        能提高細胞內環磷腺?的含量，小劑量能興奮大腦皮層，
                        振奮精神，改善思維，消除疲勞，加快反應，提昇工作效率。
                </p>
            </div>
        </div>

        <div class="row coffee fadeInLeft wow">
            <div class="col-12 col-md-5 my-3">
                <img src="./images/banner-image_14.jpg" class="w-100 h-100 object-fit">
            </div>
            <div class="col-12 col-md-7 my-3 text-white align-self-center">
                <h1>喝咖啡的壞處</h1>
                <p>咖啡因對有高血壓及心血管疾病的人有強心作用，大劑量則會興奮延腦呼吸中樞和血管運動中樞，
                    增加呼吸頻率，造成過度刺激，
                    產生焦慮、興奮、頭痛、失眠、心神不寧。
                    同時也會使心跳加快，血壓增高，
                    亦容易引起心肌缺氧，對病情的控制不利。
                </p>
            </div>
        </div>
    </div>

    <!-- 這邊是頁尾的部分 -->
    <div class="container-fluid bg-primary text-white text-center slideInUp wow" id="footer">
        <div class="row">
            <div class="col-12">

                <ul class="nav justify-content-center">
                    <li class="nav-item ">
                        <a class="nav-link text-white active" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <i class="fab fa-line"></i>
                        </a>
                    </li>

                </ul>
                <h5> &copy; <script>
                        document.write(new Date().getFullYear())
                    </script>泰山網頁班 </h5>

            </div>
        </div>
    </div>


    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script>
/*         $(window).on('load', function () {
            $("#loading").fadeOut(2000, function () {
                $("#content").fadeIn();
                $("#footer").fadeIn();
                new WOW().init()
            });
        }) */
        $(function(){

var show ="#<?php echo $do ?>";
/* alert(show); */
 
 $(show).removeClass("sub a").addClass("menushow");
    </script>
</body>

</html>