                                <?php
                                        require_once($mypath."db/db_connect.php");
                                        $link = create_connection();
                                        $sql = "select * from reply,article where article.Id = reply.theme_id order by reply.date desc;";
                                        $result = execute_sql($link,'你的SQL',$sql);
                                        $row1 = mysqli_fetch_row($result);
                                        $row2 = mysqli_fetch_row($result);
                                        $row3 = mysqli_fetch_row($result);
                                        $row4 = mysqli_fetch_row($result);
                                ?>
                                                <section class="widget">
                                                        <h3 class="title">最新回覆</h3>
                                                        <ul class="articles">
                                                                <li class="">
                                                                        <h4 style="color:green;"><?php echo $row1[1]; ?></h4>
                                                                        <span class="article-meta" style="color:green;"><?php echo $row1[2]; ?>                       <a href="<?php echo $mylink.'/member/member_article/page'.$row1[3].'.php' ?>" style="font-weight:bold;">by <?php echo $row1[6]; ?></span>
                                                                        
                                                                </li>
                                                                <li class="">
                                                                        <h4 style="color:green;"><?php echo $row2[1]; ?></h4>
                                                                        <span class="article-meta" style="color:green;"><?php echo $row2[2]; ?>                       <a href="<?php echo $mylink.'/member/member_article/page'.$row2[3].'.php' ?>" style="font-weight:bold;">by <?php echo $row2[6]; ?></span>
                                                                        
                                                                </li>
                                                                <li class="">
                                                                        <h4 style="color:green;"><?php echo $row3[1]; ?></h4>
                                                                        <span class="article-meta" style="color:green;"><?php echo $row3[2]; ?>                       <a href="<?php echo $mylink.'/member/member_article/page'.$row3[3].'.php' ?>" style="font-weight:bold;">by <?php echo $row3[6]; ?></span>
                                                                        
                                                                </li>
                                                                <li class="">
                                                                        <h4 style="color:green;"><?php echo $row4[1]; ?></h4>
                                                                        <span class="article-meta" style="color:green;"><?php echo $row4[2]; ?>                       <a href="<?php echo $mylink.'/member/member_article/page'.$row4[3].'.php' ?>" style="font-weight:bold;">by <?php echo $row4[6]; ?></span>
                                                                        
                                                                </li>
                                                        </ul>
                                                </section>