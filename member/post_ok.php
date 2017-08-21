<?php
        if(!isset($_SESSION))
        {
            session_start();  
        }
        if(isset($_SESSION['account']))
    {
        //寫入SQL
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];
        $discussion = $_REQUEST['discussion'];
        $account = $_SESSION['account'];
        $article_id = "$"."article_id";
        date_default_timezone_set('PRC');
        $date = date("y-m-d");
        require_once("../db/db_connect.php");
        $link = create_connection();
        $sql = "insert into article(theme,article_content,account,date,discussion_id) values('$title','$content','$account','$date',$discussion)";
        $result = execute_sql($link,'u351919982_kao',$sql);

        //寫入檔案page+id.php
        $sql = "select * from article where account='$account' order by id desc limit 1";
        $result = execute_sql($link,'u351919982_kao',$sql);
        $row = mysqli_fetch_row($result);
        $file = fopen("member_article/page_model.php","r");
        if($file){
            $file_all = fread($file,filesize("member_article/page_model.php"));
            $file2 = fopen("member_article/page".$row[0].".php", "w+");
            fwrite($file2, "<?php \n$article_id=$row[0]; \n?>\n");
            fclose($file2);
            $file2 = fopen("member_article/page".$row[0].".php", "a");
            if (fwrite($file2, $file_all)){
                fclose($file);
                fclose($file2);
            }else{
                fclose($file);
            }
        }
        header('location:member_article/page'.$row[0].'.php');
    }else{
        header('location:member_article/page'.$row[0].'.php');
    }
        mysqli_close($link);
?>
