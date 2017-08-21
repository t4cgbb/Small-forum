                                                <section class="widget">
                                                        <div class="support-widget">
                                                        

                                                        <?php
                                                        
                                                    


                                                        //登入
                                                        @$judge = $_REQUEST['judge'];

                                                        if($judge == 3)
                                                        {
                                                          $_SESSION['judge'] = $judge;
                                                          session_destroy();
                                                        }

                                                        //第一次按下登入按鈕
                                                        if($judge == 1)
                                                        {
                                                            $account = str_replace("'", "''", $_REQUEST["account"]);
                                                            $pwd = sha1(str_replace("'","''",$_REQUEST["pwd"]));

                                                            require_once("db/db_connect.php");
                                                            $link = create_connection();
                                                            $sql = "select account from member where account = '$account' and password='$pwd';";

                                                            $result = execute_sql($link, 'u351919982_kao', $sql);

                                                            if(mysqli_num_rows($result) == 0){
                                                                echo '<h4 class="title" style="color:red" >您輸入的帳號密碼是錯誤的!</h4>';
                                                            }else{
                                                                $judge = 2;
                                                                $_SESSION['account'] = $account;
                                                                $_SESSION['judge'] = $judge;
                                                              }
                                                                mysqli_close($link);
                                                        }
                                                        //頁面刷新，第一次按下按鈕

                                                        if(isset($_SESSION['account']) && $_SESSION['judge'] !=3)
                                                        {
                                                                echo '<h3 class="title"></h3>';
                                                                echo '<form action="'.$mylink.'index.php" method="post">';
                                                                echo '<div class="col-sm-10" id="login_bar" style="display: block;" >';     
                                                                echo '<h3 style="color:black; text-shadow:2px 2px 2px yellow;">歡迎會員'.$_SESSION['account'].'回來！</h3>';
                                                                echo '</div>';
                                                                echo '<div class="col-sm-offset-2 col-sm-10">';
                                                                echo '<Button type="submit" class="btn btn-default" value="3" id="judge" name="judge">登出</Button>';
                                                                echo ' <button type="submit" class="btn btn-default" formaction="'.$mylink.'member/post.php">發文</button>';
                                                                echo '</form>';


                                                                
                                            
                                                        }else{
                                                            echo '<h3 class="title">會員登入</h3>';
                                                            echo '<form action="'.$mylink.'index.php" method="post">';
                                                            echo '<div class="col-sm-10" id="login_bar" style="display: block;" >';     
                                                            echo '帳號：<input type="text" name="account" class="form-control" id="account" placeholder="輸入帳號" required="requried"></br>';
                                                            echo '密碼：<input type="password" name="pwd" class="form-control" id="pwd" placeholder="輸入帳號" required="requried">';
                                                            echo '</div>';
                                                            echo '<div class="col-sm-offset-2 col-sm-10">';
                                                            echo '<button type="submit" class="btn btn-default" value="1" id="judge" name="judge">登入</button>';
                                                            echo '<a href = '.$mylink.'member/register.php class="btn btn-default" style="margin-left:100px;">註冊</a>';
                                                            echo '</form>';

                                                        }

                                                        ?>
                                                        </div>

                                                        <!--
                                                                <h3 class="title">我是誰</h3>
                                                                <p class="intro">登入者為何</p>
                                                        -->
                                                        </div>
                                                </section>