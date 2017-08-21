                                <?php
                                        @require_once($mypath."db/db_connect.php");
                                        $link = create_connection();
                                        $sql = "select * from article order by date desc";
                                        $result = execute_sql($link,'你的SQL',$sql);
                                        $row1 = mysqli_fetch_row($result);
                                        $row2 = mysqli_fetch_row($result);
                                        $row3 = mysqli_fetch_row($result);
                                        $row4 = mysqli_fetch_row($result);
                                ?>
                                                <section class="widget">
                                                        <h3 class="title">最近發表文章</h3>
                                                        <ul class="articles">
                                                                <li class="article-entry standard">
                                                                        <h4><a href="<?php echo '../member_article/page'.$row1[0].'.php' ?>"><?php echo $row1[1]?></a></h4>
                                                                        <span class="article-meta"><?php echo $row1[4]?></span>
                                                                        
                                                                </li>
                                                                <li class="article-entry standard">
                                                                        <h4><a href="<?php echo '../member_article/page'.$row2[0].'.php' ?>"><?php echo $row2[1]?></a></h4>
                                                                        <span class="article-meta"><?php echo $row2[4]?></span>
                                                                        
                                                                </li>
                                                                <li class="article-entry video">
                                                                        <h4><a href="<?php echo '../member_article/page'.$row3[0].'.php' ?>"><?php echo $row3[1]?></a></h4>
                                                                        <span class="article-meta"><?php echo $row3[4]?></span>
                                                                        
                                                                </li>
                                                                <li class="article-entry image">
                                                                        <h4><a href="<?php echo '../member_article/page'.$row4[0].'.php' ?>"><?php echo $row4[1]?></a></h4>
                                                                        <span class="article-meta"><?php echo $row4[4]?></span>
                                                                        
                                                                </li>
                                                        </ul>
                                                </section>