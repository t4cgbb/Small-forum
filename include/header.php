<!doctype html>
<?php
	$mylink='/work/';
        if(!isset($_SESSION)){
                session_start();
}

?>
<?php
$error_level = error_reporting(0);
$dbh = mysql_connect();
error_reporting($error_level);
?>
<html lang="zh-TW">
        <head>
                <meta charset="UTF-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?php echo $title ?></title>

                <link rel="shortcut icon" href="<?php echo $mylink ?>images/favicon.png" />

                <!-- Style Sheet-->
                <link rel='stylesheet' id='bootstrap-css-css'  href='<?php echo $mylink ?>css/bootstrap5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='responsive-css-css'  href='<?php echo $mylink ?>css/responsive5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='pretty-photo-css-css'  href='<?php echo $mylink ?>js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4' type='text/css' media='all' />
                <link rel='stylesheet' id='main-css-css'  href='<?php echo $mylink ?>css/main5152.css?ver=1.0' type='text/css' media='all' />
                <link rel='stylesheet' id='custom-css-css'  href='<?php echo $mylink ?>css/custom5152.html?ver=1.0' type='text/css' media='all' />

                <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
                <!--[if lt IE 9]>
                <script src="js/html5.js"></script>
                <![endif]-->

        </head>

        <body>

                <!-- Start of Header -->
                <div class="header-wrapper">
                        <header>
                                <div class="container">


                                        <div class="logo-container">
                                                <!-- Website Logo -->
                                                <a href="<?php echo $mylink ?>index.php"  title="簡易論壇">
                                                <img src="<?php echo $mylink ?>images/logo.png" alt="簡易論壇">
                                                </a>
                                        </div>


                                        <!-- Start of Main Navigation -->
                                        <nav class="main-nav">
                                                <div class="menu-top-menu-container">
                                                        <ul id="menu-top-menu" class="clearfix">
                                                                <li <?php echo $zero?>><a href="<?php echo $mylink ?>index.php">首頁</a></li>
                                                                <li <?php echo $one?>><a href="<?php echo $mylink ?>articles-list.php">搜尋文章</a></li>
                                                        </ul>
                                                </div>
                                        </nav>
                                        <!-- End of Main Navigation -->

                                </div>
                        </header>
                </div>
                <!-- End of Header -->