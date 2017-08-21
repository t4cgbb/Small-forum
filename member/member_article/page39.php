<?php 
$article_id=39; 
?>
<?php 
        $zero = ''; $one = ''; $two =''; $three='';
        $title = "文章頁面";
        include("../../include/header.php");
        include ("../../include/sear.php");
        $id =$article_id;
        $_SESSION['id']=$id;	
        
        require_once("../../db/db_connect.php");
        $link = create_connection();
        $sql = "select * from article where Id =$id";
        $result = execute_sql($link,'u351919982_kao',$sql);
        $row = mysqli_fetch_row($result);
        
        $discussion=$row[5];
        if($discussion == 1)
        {
                $discssion="資訊版";
        }else
        {
                $discssion="娛樂版";
        }


        $sql = "select * from reply where theme_id = $id order by date asc";
        $result = execute_sql($link,'u351919982_kao',$sql);
        $limit = 0;
        $sum = mysqli_num_rows($result);

?>


                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <article class=" type-post format-standard hentry clearfix">

                                                        <h1 class="post-title"><a href="#"><?php echo $row[1]; ?></a></h1>

                                                        
                                                        <div class="post-meta clearfix">  
                                                                <span style="font-size:14px; color:darkgreen; text-shadow:yellow; font-weight:bold;">作者：<?php echo $row[3];?></span>
                                                                <span class="date"><?php echo $row[4] ?></span>
                                                                <span class="category"><a href="#" ><?php echo $discssion?></a></span>
                                                                <span class="comments"><a href="#" ><?php echo $sum ?> 則回應訊息</a></span>
                                                        </div><!-- end of post meta -->
                                                        


                                                        <p><?php echo $row[2]?></p>
                                                        <?php
                                                            if(isset($_SESSION['account'])){
                                                                if($_SESSION['account'] == $row[3]){
                                                            ?>
                                                        
                                                        <form action="ok.php" method="post" style="float:left;">        
                                                                <button type="submit" class="btn btn-default" id="judge" value="2" name="judge">刪除</button>
                                                        </form>
                                                        <form action="update.php" method="post" style="margin-left:100px;">        
                                                                <button type="submit" class="btn btn-default">修改</button>
                                                        </form>
                                                        
                                                        <?php }
                                                    }
                                                         ?>
                                        </article>


                                                <section id="comments">

                                                        <h3 id="comments-title">(<?php echo $sum ?>) 回帖內容</h3>

                                                        <ol class="commentlist">

                                                                <li class="comment even thread-even depth-1" id="li-comment-2">
                                                                <?php

                                                                        while($row = mysqli_fetch_row($result)){
                                                                        
                                                                ?>
                                                                        <article id="comment-2">

                                                                <!--刪除判斷-->
                                                                <?php
                                                                        if(isset($_SESSION['account'])){
                                                                            if($_SESSION['account'] == $row[1]){
                                                                                $_SESSION['reply_id'] = $row[0];
                                                                ?>
                                                                                <form action="ok.php" method="post" style="">        
                                                                                        <button type="submit" class="btn btn-default" id="judge" value="4" name="judge">刪除</button>
                                                                                </form>
                                                                <?php  } 
                                                                    }
                                                                ?>

                                                                                <a href="#">
                                                                                        <img alt="" src="<?php echo $mylink;?>images/temp/man.png" class="avatar avatar-60 photo" height="60" width="60">
                                                                                </a>

                                                                                <div class="comment-meta">

                                                                                        <h5 class="author">
                                                                                                <cite class="fn">
                                                                                                        <a href="#" rel="external nofollow" class="url"><?php echo $row[1]; ?></a>
                                                                                                </cite>
                                                                                                - 的回覆
                                                                                        </h5>

                                                                                        <p class="date">
                                                                                                <a href="#">
                                                                                                        <time><?php echo $row[4]; ?></time>
                                                                                                </a>
                                                                                        </p>

                                                                                </div><!-- end .comment-meta -->

                                                                                <div class="comment-body">
                                                                                        <p><?php echo $row[2]; ?></p>
                                                                                </div><!-- end of comment-body -->

                                                                        </article><!-- end of comment -->
                                                                <?php
                                                                        $limit++;
                                                                        if($limit == 50)
                                                                        {
                                                                            break;
                                                                        }
                                                                    }
                                                                     mysqli_close($link);
                                                                ?>

                                                                        <ul class="children">

                                                                                <li class="comment byuser comment-author-saqib-sarwar bypostauthor odd alt depth-2" id="li-comment-3">
                                                                                </li>
                                                                        </ul>
                                                                </li>

                                                        </ol>
                                                        <?php if(isset($_SESSION['account'])){ ?> 
                                                        <div id="respond">

                                                                <h3>留言</h3>

                                                                <div class="cancel-comment-reply">
                                                                        <a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Click here to cancel reply.</a>
                                                                </div>


                                                                <form action="ok.php" method="post" id="commentform">


                                                                        <p class="comment-notes">您可以在這邊輸入你想留下的訊息</p>

                                                                        <div>
                                                                                <label for="comment">訊息</label>
                                                                                
                                                                                <textarea class="span8" name="comment" id="comment" cols="58" rows="10"></textarea>
                                                                        </div>
                                                                        <div>
                                                                                <button type="submit" class="btn btn-default" id="judge" value="1" name="judge">送出</button>
                                                                                
                                                                        </div>

                                                                </form>

                                                        </div>
                                                        <?php }?>

                                                </section><!-- end of comments -->

                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">

                                                <?php include("../../login_auth/login.php"); ?>
                                                <?php $mypath="../.." ?>
                                                <?php include("../member_page/sidebar_article.php"); ?>
                                                <br/><br/>
                                                <?php include("../member_page/sidebar_reply.php"); ?>

                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

        
<?php include("../../include/footer.php") ?>
