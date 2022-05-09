<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
<meta charset="UTF-8">
<title>图书管理系统登录</title>
		<style>
			body{
				background-image: url(../image/xysy.jpg);
				background-repeat: no-repeat;
			}
			.box{
				width: 450px;
				height: 450px;
				background-color: rgba(255,255,255,0.7);
				border-radius: 50%;
				/* box-shadow 阴影 */
				/* 5个值 */
				/* 第一个值 X轴的偏移量 */
				/* 第二个值 Y轴的偏移量 */
				/* 第三个值 扩展半径 */
				/* 第四个至 模糊半径 */
				/* 第五个值 颜色 */
				box-shadow: 2px 2px 20px black;
				margin: 150px auto;
			}
			.title{
				/* border: 1px solid orange; */
				text-align: center;
				font-size: 40px;
				position: relative;
				top: 50px;
			}
			.box1{
				position: relative;
				top: 80px;
				width: 70%;
				margin: 0px auto;
			}
			.box2{
				position: relative;
				top: 85px;
				width: 70%;
				margin: 0px auto;
			}
			.input-group{
				width: 310px;
				height: 37px;
			}
			.input-group>input{
				height: 37px;
			}
			.box3{
				width: 280px;
				height: 37px;
				display: block;
				border: none;
				border-radius: 4px;
				margin: 0px auto;
				position: relative;
				top: 110px;
				background-color: rgb( 	47,79,79);
				color: white;
				opacity: 0.7;
				text-align: center;
				line-height: 37px;
			}
			.box4{
				position: relative;
				top: 150px;
				left: 253px;
				text-decoration: none;
			}
			.box4:hover{
				text-decoration: none;
			}
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
			#usernameMsg,#passwordMsg{
				height: 20px;
				width: 200px;
				color: red;
			}
		</style>
</head>

<body>
	<div id="msg" class="msg"></div>
<div class="box">
    	<div class="title">
    		图书管理系统
    	</div>
		
			<!-- 账号框 -->
			<div class="box1">
				<div id="usernameMsg"></div>
				<div class="form-group">
				  <div class="input-group">
				    <div class="input-group-addon">
						<a class="glyphicon glyphicon-user"></a>
					</div>
				    <input type="text" name="account" class="form-control" id="exampleInputAccount"  onblur="AcccontOnblur()" placeholder="账号/account">
				  </div>
				</div>
			</div>
			<script>
				function AcccontOnblur() {
					//1.声明变量
					var exampleInputAccountObj;
					exampleInputAccountObj = document.getElementById("exampleInputAccount");
					var value = exampleInputAccountObj.value; //获取username0bj中的文本
					if(!value)
						msg = "请输入账号 ："
					else
						msg = ""; //将提示消息放入SPAN
					usernameMsg.innerHTML = msg; //将提示消息放入SPAN
				}
			</script>
			<!-- 密码框 -->
			<div class="box2">
				<div id="passwordMsg"></div>
				<div class="form-group">
				  <div class="input-group">
				    <div class="input-group-addon">
						<a class="glyphicon glyphicon-lock "></a>
					</div>
				    <input type="password" name="password" class="form-control" id="exampleInputPassword" onblur="PasswordOnblur()" placeholder="密码/password">
				  </div>
				</div>
			</div>
		<script>
			function PasswordOnblur (){
				//1.声明变量
				var exampleInputPasswordtObj;
				exampleInputPasswordtObj = document.getElementById("exampleInputPassword");
				var value = exampleInputPasswordtObj.value;	//获取username0bj中的文本
					if(!value)
					msg= "请输入密码 ："
					else
					msg="";  //将提示消息放入SPAN
					passwordMsg.innerHTML = msg;      //将提示消息放入SPAN
			}
		</script>
		
			<!-- 登录按钮 -->
			<input type="submit" name="submit" class="box3" value="立即登录" id="submit" onclick="submitajax()" />
<script>
	var ajax;
	var res;
	var exampleInputAccount,exampleInputPassword;
	var msg2;
	function submitajax(){
		
		exampleInputAccount =document.getElementById("exampleInputAccount").value;
		exampleInputPassword =document.getElementById("exampleInputPassword").value;
		if(exampleInputAccount==""&&exampleInputPassword==""){
			msg= "请输入账号：";
			usernameMsg.innerHTML = msg;   	
			msg2= "请输入密码 ：";
			passwordMsg.innerHTML = msg2; 
		}else if(exampleInputAccount==""){
			msg= "请输入账号：";
			usernameMsg.innerHTML = msg;   			
		}else if(exampleInputPassword==""){
			msg= "请输入密码 ：";
			passwordMsg.innerHTML = msg;  
		}else{
			var data="account="+exampleInputAccount+"&password="+exampleInputPassword;
			ajax= new XMLHttpRequest();
			ajax.onreadystatechange = function(){
				if(ajax.readyState==4){
					res =ajax.responseText;//获取相应内容 account=&password=
					msg2 =document.getElementById("msg");
					msg2.innerHTML=res;
					if(res.trim()== "ok"){
						window.location.href='main.php?account='+exampleInputAccount+'&tip=登录成功';
					}else{
						document.getElementById("exampleInputPassword").value="";
						document.getElementById("exampleInputAccount").value="";
						usernameMsg.innerHTML="";
						passwordMsg.innerHTML="";
						msgblock();
						setTimeout(msgnone, 2000);				
						}
					}	
				}
			ajax.open("GET","../login.php?"+data,true);
			ajax.send(null);
			}
	}
function msgnone(){
	var dismsg=document.getElementById("msg");
	dismsg.style.display='none'
}
function msgblock(){
	var dismsg=document.getElementById("msg");
	dismsg.style.display='block';
}
</script>
		<!-- 立即注册按钮 -->
		<a href="./reg.php" class="box4">立即注册</a>
    </div>


</body>
<script type="text/javascript">
		function resize() {
			//获取浏览器的高度
			//兼容写法
			//window.innerHeight 浏览器的高度
			//document.body.clientHeight body标签的高度
			//document.documentElement.clientHeight html标签的高度
			var H = window.innerHeight || document.body.clientHeight || document.documentElement.clientHeight;
			//获取浏览器的宽度
			var W = window.innerWidth || document.body.clientWidth || document.documentElement.clientWidth;
			var body = document.getElementsByTagName("body")[0];
			// background-size 
			// 编程语言里面不允许出现  -
			// backgroundSize 驼峰命名法
			body.style.backgroundSize = W + "px " + H + "px";
		}

		//当浏览器第一次运行的时候触发该方法
		resize();
		//onresize 当浏览器进行方法缩小会触发该事件
		window.onresize = resize;
	</script>
</html>