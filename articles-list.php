<?php 
        $zero = ''; $one = 'class="current-menu-item"'; $two =''; $three='';
        $title = "查詢文章";
        include("include/header.php"); 
?>
<script>
var xhr;
function startSearch(){

        var keyword =document.getElementById('search').value;
        var url= "sear_article.php?keyword="+encodeURI(keyword);
    try
    {  xhr=new XMLHttpRequest(); //建立一個AJAX物件
        if (xhr.overrideMimeType) xhr.overrideMimeType('text/xml');}
        catch (e)   {  try
            { xhr=new ActiveXObject("Msxml2.XMLHTTP"); }//如果標準的建不起來，用IE的方法建立
            catch (ee)
            { alert("Your Browser doesn't support XMLHttpRequest"); return false; }}
            xhr.onreadystatechange = function()
            {
                if (xhr.readyState==4 && xhr.status==200) //如果呼叫成功，處理底下
                    getData();
            }

    xhr.open("get",url,true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=utf-8");
    xhr.send(null);
    /*多項判斷
    var params ="name="+encodeURI(document.getElementById("name").value)
          +"&school="+encodeURI(document.getElementById("school").value)
          +"&dep="+encodeURI(document.getElementById("dep").value)
          +"&sex="+encodeURI(document.getElementById("sex").value)
          */

}
function getData(){
        var data=xhr.responseText.split("=");  //判斷前面資料的num
        var num = parseInt(data[0]);
        var find =document.getElementById("find");
        var title=document.getElementById("title");
        var author=document.getElementById("author");
        var date = document.getElementById("date");
        var category=document.getElementById("category");
        for (var i=1;i<=num;i++)
        {
                var item=data[i].split("#");
                find.innerHTML=find.innerHTML +"<article class='format-standard type-post hentry clearfix'>";
                find.innerHTML=find.innerHTML +"<header class='clearfix'>";
                find.innerHTML=find.innerHTML +"<h3 class='post-title' id=title><a href='/work/member/member_article/page"+item[1]+".php'>"+item[0]+"</a></h3>";
                find.innerHTML=find.innerHTML +"</header>";
                find.innerHTML=find.innerHTML +"</article>";
        }

}
</script>
                <!-- Start of Search Wrapper -->
                <div class="search-area-wrapper">
                        <div class="search-area container">
                                <h3 class="search-header">您可以查詢文章關鍵字</h3>
                                <p class="search-tag-line">請輸入你要查詢的文章關鍵字，以便查詢。</p>

                                <div class="search-form clearfix">
                                        <input class="search-term required" type="text" id="search" name="search" placeholder="請輸入你要查詢的文章關鍵字，以便查詢。" title="查詢" />
                                        <input class="search-btn" type="button" value="搜尋" onclick="startSearch()"/>
                                        <div id="search-error-container"></div>
                                </div>
                        </div>
                </div>
                <!-- End of Search Wrapper -->

                <!-- Start of Page Container -->
                <div class="page-container">
                        <div class="container">
                                <div class="row">

                                        <!-- start of page content -->
                                        <div class="span8 main-listing" id="find">
                                        </div>
                                        <!-- end of page content -->


                                        <!-- start of sidebar -->
                                        <aside class="span4 page-sidebar">
                                                <?php include("login_auth/login.php"); ?>
                                                <?php $mypath=""?>
                                                <?php include("member/member_page/sidebar_article.php"); ?>
                                        </aside>
                                        <!-- end of sidebar -->
                                </div>
                        </div>
                </div>
                <!-- End of Page Container -->

<?php include("include/footer.php") ?>
