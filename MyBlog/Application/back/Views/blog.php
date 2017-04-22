<!DOCTYPE html>
<html lang="zh-CN" class="ax-vertical-centered">
<head>
	<meta charset="UTF-8">
	<title>个人博客</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<script src="jQuery/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap-dropdown.min.js"></script>

<script src="js/getImg.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/blog_navbar.css">



</head>

<body>
    

<nav class="navbar navbar-inverse blog_navbar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand blog_brand" href="index.php?p=back" target="_parent">我的个人博客</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
            <li class="_active"><a href="index.php?p=back" class="a_navbar_text" target="_parent">首页</a></li>
        </ul>
         <ul class="nav navbar-nav navbar-right"> 
			 	 <li class="dropdown">
						<a data-hover="dropdown" href="#" role="button"> <img src="#" class="img-circle" width="35" height="35" id="head_img"></a>

							 <ul class="dropdown-menu">
								<li><a href="index.php?p=back&a=setting" target="_parent">设置</a></li>
                                 <li class="divider"></li>
                                 <li><a href="index.php?p=back&a=add_blog" target="_parent">写博客</a></li>
								 <li class="divider"></li>
								<li><a href="index.php?c=Login&a=logout" target="_parent">登出</a></li>
								</ul>
				</li>
  		 </ul>
    </div>
    </div>
</nav>



  
 
    
</body>
</html>