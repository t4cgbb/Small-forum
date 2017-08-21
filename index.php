<?php
        $zero = 'class="current-menu-item"'; $one = ''; $two =''; $three='';
        $title = "簡易型論壇";
        include ("include/header.php");
        include ("include/sear.php");
/*
        $account = "123";
        $content = "$"."account";
        $file = fopen("page.php","r");
        if($file){
            $fup = fread($file,filesize("page.php"));
            $fp2 = fopen("test.php", "w+");
            fwrite($fp2, "<?php \n$content=$account; \n echo $account;\n?> \n");
            
            fclose($fp2);
            $fp2 = fopen("test.php", "a");
            if(fwrite($fp2, $fup)){
                fclose($file);
                fclose($fp2);
                die("寫入成功");
            }else{
                fclose($file);
                die("寫入失敗");
            }
        }*/
        require_once("db/db_connect.php");
        $link = create_connection();
        $sql = "select * from member limit 5";
        $result = execute_sql($link,'u351919982_kao',$sql);
        $member1 = mysqli_fetch_row($result);
        $member2 = mysqli_fetch_row($result);
        $member3 = mysqli_fetch_row($result);
        $member4 = mysqli_fetch_row($result);
        $member5 = mysqli_fetch_row($result);
        $member6 = mysqli_fetch_row($result);
        $member7 = mysqli_fetch_row($result);
        $member8 = mysqli_fetch_row($result);
        mysqli_close($link);
?>
                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 page-content">

                                                <!-- Basic Home Page Template -->
                                                <div class="row separator">
                                                        <section class="span4 articles-list">
                                                                <h3>資訊版</h3>
                                                                <ul class="articles">
                                                                <?php
                                                                        require_once("db/db_connect.php");
                                                                        $link = create_connection();
                                                                        $sql = "select * from article where discussion_id=1";
                                                                        $result = execute_sql($link,'u351919982_kao',$sql);
                                                                        $limit = 0;
                                                                        while($row = mysqli_fetch_row($result)){
                                                                        
                                                                ?>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="member/member_article/page<?php echo $row[0]; ?>.php"><?php echo $row[1];?></a></h4>
                                                                                <span class="article-meta"><?php echo $row[4];?></span>
                                                                        </li>
                                                                        
                                                                <?php
                                                                        $limit++;
                                                                        if($limit == 10)
                                                                        {
                                                                            break;
                                                                        }
                                                                    }
                                                                ?>
                                                                </ul>
                                                        </section>


                                                        <section class="span4 articles-list">
                                                                <h3>娛樂版</h3>
                                                                <ul class="articles">
                                                                <?php
                                                                        require_once("db/db_connect.php");
                                                                        $link = create_connection();
                                                                        $sql = "select * from article where discussion_id=2";
                                                                        $result = execute_sql($link,'u351919982_kao',$sql);
                                                                        $limit = 0;
                                                                        while($row = mysqli_fetch_row($result)){
                                                                        
                                                                ?>
                                                                        <li class="article-entry standard">
                                                                                <h4><a href="member/member_article/page<?php echo $row[0]; ?>.php"><?php echo $row[1];?></a></h4>
                                                                                <span class="article-meta"><?php echo $row[4];?></span>
                                                                        </li>
                                                                        
                                                                <?php
                                                                        $limit++;
                                                                        if($limit == 10)
                                                                        {
                                                                            break;
                                                                        }
                                                                    }
                                                                ?>
                                                                </ul>
                                                        </section>
                            

                                                </div>
                                                
                                        </div>

                                        <!-- end of page content -->


                                      <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">
                                        <?php include("login_auth/login.php"); ?>
                                                <section class="widge">
                                                    <div class="quick-links-widget">
                                                        <?php $mypath = "";?>
                                                         <?php include("member/member_page/sidebar_reply.php"); ?>
                                                    </div>
                                                </section>
                                                <section class="widget">
                                                        <div class="quick-links-widget">
                                                                <h3 class="title">友站連結</h3>
                                                                <ul id="menu-quick-links" class="menu clearfix">
                                                                        <li><a href="index.php">首頁</a></li>
                                                                        <!--<li><a href="articles-list.html">文章清單</a></li>-->
                                                                        <li><a href="t4gamelive.com">T思搜一下</a></li>
                                                                        <li><a href="t4cgbb.space">個人學習空間</a></li>
                                                                </ul>
                                                        </div>
                                                </section>

                                                <section class="widget">
                                                        <div class="quick-links-widget">
                                                                <h3 class="title">最近註冊成功的會員</h3>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member1[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member2[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member3[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member4[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member5[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member6[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member7[0];?></h4>
                                                                <h4 style="color:gray; text-shadow:1px 1px 1px yellow;"><?php echo $member8[0];?></h4>
                                                </section>
                                                         </div>
                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->
<?php include("include/footer.php") ?>
