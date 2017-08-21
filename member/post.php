<?php
        include ("../login_auth/auth.php");
        $zero = 'class="current-menu-item"'; $one = ''; $two =''; $three='';
        $title = "簡易型論壇";
        include ("../include/header.php");
        include ("../include/sear.php");

?>
                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <article class="type-page hentry clearfix">
                                                        <h1 class="post-title">
                                                                <a href="#">發文</a>
                                                        </h1>
                                                        <hr>
                                                        <p>每個人應享有言論自由的權利，您可以在這裡隨心所欲的進行發文，盡情享受這種權利！</p>
                                                </article>


                                                <form action="post_ok.php" method="post">
                                                        <div class="span2">
                                                                 <label for="content">討論版 <span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                        <select name="discussion">
                                                        <option value="1">資訊版</option>
                                                        <option value="2">娛樂版</option>
                                                        </select>
                                                        </div>

                                                        <div class="span2">
                                                                <label for="title">文章主題<span>*</span></label>
                                                        </div>
                                                        <div class="span6">
                                                                <input type="text" name="title" id="reason" class="input-xlarge" value=""　required="requried">
                                                        </div>

                                                        <div class="span2">
                                                                <label for="content">文章內容 <span>*</span> </label>
                                                        </div>
                                                        <div class="span6">
                                                                <textarea name="content" id="content" class="required span6" rows="30" 　required="requried" required="requried"></textarea>
                                                        </div>

                                                        <div class="span6 offset2 bm30">
                                                                <input type="submit" name="submit" value="送出" class="btn btn-inverse">
                                                                <img src="images/loading.gif" id="contact-loader" alt="Loading...">
                                                        </div>

                                                        <div class="span6 offset2 error-container"></div>
                                                        <div class="span8 offset2" id="message-sent"></div>

                                                </form>
                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">
                                                    <?php include("../login_auth/login.php"); ?>
                                                    <?php $mypath=".."?>
													<?php include("member_page/sidebar_article.php"); ?>
                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

<?php include("../include/footer.php") ?>

