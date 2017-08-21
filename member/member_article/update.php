<?php
        include ("../../login_auth/auth.php");
        $zero = 'class="current-menu-item"'; $one = ''; $two =''; $three='';
        $title = "簡易型論壇";
        include ("../../include/header.php");
        include ("../../include/sear.php");

        $id = $_SESSION['id'];
        require_once("../../db/db_connect.php");
        $link = create_connection();
        $sql = "select * from  article where Id=$id";
        $result = execute_sql($link, 'u351919982_kao', $sql);
        $article_content = mysqli_fetch_row($result);

        if($article_content[5] == 1){
                $discussion = "資訊版";
        }else{
                $discussion = "娛樂版";
        }
?>
                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <article class="type-page hentry clearfix">
                                                        <h1 class="post-title">
                                                                <a href="#">修改您的發文</a>
                                                        </h1>
                                                        <hr>
                                                        <p>這裡可以修改您的發文內容及主題</p>
                                                </article>


                                                <form action="ok.php" method="post">
                                                        <div class="span2">
                                                                 <label for="content">討論版 <span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                        <select name="discussion">
                                                        <option><?php echo $discussion; ?></option>
                                                        </select>
                                                        </div>

                                                        <div class="span2">
                                                                <label for="title">文章主題<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="title" id="reason" class="input-xlarge" value="<?php echo $article_content[1]; ?>"　required="requried">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="content">文章內容 <span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                                <textarea name="content" id="content" class="required span6" rows="30"　required="requried" required="requried"><?php echo $article_content[2]; ?></textarea>
                                                        </div>

                                                        <div class="span6 offset2 bm30">
                                                                <button type="submit" class="btn btn-default" id="judge" value="3" name="judge">送出</button>
                                                                <img src="images/loading.gif" id="contact-loader" alt="Loading...">
                                                        </div>

                                                        <div class="span6 offset2 error-container"></div>
                                                        <div class="span8 offset2" id="message-sent"></div>

                                                </form>
                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">
                                                    <?php include("../../login_auth/login.php"); ?>
                                                    <?php $mypath="../.."; ?>
                                                    <?php include("../member_page/sidebar_article.php"); ?>
                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>

<?php include("../../include/footer.php") ?>

