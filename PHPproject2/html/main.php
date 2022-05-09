<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>图书管理系统</title>
	<link rel="stylesheet" href="../css/admin.css">
	<style type="text/css">
	.admin-img{
	width: 100%;
	height: 100%;
	}
li a:hover{background:#666}
	.msg{
				display: none;
				width: 200px;
				height: 30px;
				line-height: 30px;
				position: absolute;
				text-align: center;
				background-color: rgba(255,255,255,0.7);
				border-radius: 50%;
				box-shadow: 2px 2px 20px black;
				left:50%;
				transform: translate(-50%, -50%);
			}
	</style>
</head>
<body>
	<div id="msg" class="msg"></div>
<div class="header">
	<h1><a href="#">图书管理系统</a></h1>
	<div class="user">
		<a >欢迎你：
<!--//			<?php
//			echo $_GET['name'];
//?>-->
<?php
			  include('../common/connect.php');//链接数据库
			   $sql = "select name from user where account = ".$_GET['account'];//检测数据库是否有对应的username和password的sql
//     			$result = $conn->query($sql);//执行sql
//     			echo "$result[name]";
       			foreach ($conn->query($sql) as $row) {
       				echo "$row[name]";
       			}
//			
?>
			</a>
		<a href="login.php">退出</a>
	</div>
</div>
<div class="main">
	<ul class="left-side">
		<li class="menu-title active">
			<a href="#">
				<i class=" fa fa-users"></i>&nbsp;&nbsp;信息管理
			</a>
		<li class="sub-menu">
			<ul>
				<li class="active">
					<a  href="main1.php" target="pageBox" >
						<i class=" fa fa-circle-thin"></i>&nbsp;&nbsp;图书信息
					</a>
				</li>
				<li class="active">
					<a  href="main2.php" target="pageBox" >
						<i class=" fa fa-circle-thin"></i>&nbsp;&nbsp;用户信息
					</a>
				</li>

			</ul>
		</li>
		
		<li class="menu-title">
			<a href="#">
				<i class=" fa fa-file-text"></i>&nbsp;&nbsp;图书介绍
			</a>
		</li>
		<li class="sub-menu">
			<ul>
				<li>
					<a target="pageBox" href="ZYHServlet">
						<i class=" fa fa-circle-thin"></i>&nbsp;&nbsp;小说
					</a>
				</li>
				<li>
					<a target="pageBox" href="GSXServlet">
					<i class=" fa fa-circle-thin"></i>&nbsp;&nbsp;文学
					</a>
				</li>
				<li>
					<a target="pageBox" href="LRPServlet">
					<i class=" fa fa-circle-thin"></i>&nbsp;&nbsp;考试
					</a>
				</li>

			</ul>
		</li>
		
		
	</ul>
	<div class="right-side">
		<iframe class="admin-img" name="pageBox" src="main1.php">
	
		</iframe>
		<!--<div class="footer">
			邢台学院                          21级计科接本2班  杨帆
		</div>-->
	</div>
</div>

<script src="../js/jquery.js"></script>
<script src="../js/admin.js"></script>
</body>

</html>