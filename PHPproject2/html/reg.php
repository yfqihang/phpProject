<!--<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>用户注册页面</title>
  </head>
  <body>
    <form action="../reg.php" method="post">
      <p>用户名:<input type="text" name="name"></p>
      <p>密 码: <input type="text" name="password"></p>
      <p><input type="submit" name="submit" value="注册">
        <a href="login.html" ><input type="button" name="login" value="已有账号，返回登录"></a>
      </p>
    </form>
  </body>
</html>-->
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
<meta charset="UTF-8">
<title>Insert title here</title>
		<style>
			body{
				background-image: url(../image/xysy.jpg);
				background-repeat: no-repeat;
			}
			.box{
				width: 450px;
				height: 495px;
				background-color: rgba(255,255,255,0.7);
				border-radius: 20%;
				/* box-shadow 阴影 */
				/* 5个值 */
				/* 第一个值 X轴的偏移量 */
				/* 第二个值 Y轴的偏移量 */
				/* 第三个值 扩展半径 */
				/* 第四个至 模糊半径 */
				/* 第五个值 颜色 */
				box-shadow: 2px 2px 20px black;
				margin: 110px auto;
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
				top: 90px;
				width: 70%;
				margin: 0px auto;
			}
			.box2{
				position: relative;
				top: 90px;
				width: 70%;
				margin: 0px auto;
			}
			.box5{
				position: relative;
				top: 90px;
				width: 70%;
				margin: 0px auto;
			}
			.input-group{
				width: 320px;
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
				top: 100px;
				background-color: rgb( 	47,79,79);
				color: white;
				opacity: 0.7;
				text-align: center;
				line-height: 37px;
			}
			.box4{
				position: relative;
				top: 125px;
				left: 230px;
				text-decoration: none;
			}
			.box4:hover{
				text-decoration: none;
			}
			#nameMsg,#accountMsg,#passwordMsg{
				width: 500px;
				height: 20px;
				/*background: black;*/
				color: red;
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
		</style>
</head>
<body>
<div class="box">
	<div id="msg" class="msg"></div>
    	<div class="title">
    		用户注册
    	</div>
			<!-- 姓名框 -->
			<div class="box1">
				<div id="nameMsg"></div>
				<div class="form-group">
				  <div class="input-group">
				    <div class="input-group-addon">
						<a class="glyphicon glyphicon-heart"></a>
					</div>
				    <input type="text" name="name" class="form-control" id="InputName" onblur="nameOnblur()" placeholder="姓名/name">
				  </div>
				</div>
			</div>
			<script>
				function nameOnblur() {
					//1.声明变量
					var nameInputNametObj;
					nameInputNametObj = document.getElementById("InputName");
					var value = nameInputNametObj.value; //获取username0bj中的文本
					if(!value)
						msg = "请输入姓名："
					else
						msg = ""; //将提示消息放入SPAN
						nameMsg.innerHTML = msg; //将提示消息放入SPAN
				}
			</script>
			<!-- 账号框 -->
			<div class="box2">
				<div id="accountMsg"></div>
				<div class="form-group">
				  <div class="input-group">
				    <div class="input-group-addon">
						<a class="glyphicon glyphicon-user "></a>
					</div>
				    <input type="text" name="account" class="form-control" id="InputAccount" onblur="accountOnblur() " placeholder="账号/account">
				  </div>
				</div>
			</div>
			<script>
				function accountOnblur() {
					//1.声明变量
					var regex=  /^[0-9]{6,11}$/;
					var accountInputNametObj = document.getElementById("InputAccount");
					var value = accountInputNametObj.value; //获取username0bj中的文本
					if(!value)
						msg = "请输入账号："
					else if(!regex. test (value)){
						msg="账号为6至11位数字"
					}else{
						msg = ""; //将提示消息放入SPAN
					}
					accountMsg.innerHTML = msg; //将提示消息放入SPAN
				}
			</script>
		
			<!-- 密码框 -->
			<div class="box5">
				<div id="passwordMsg"></div>
				<div class="form-group">
				  <div class="input-group">
				    <div class="input-group-addon">
						<a class="glyphicon glyphicon-lock "></a>
					</div>
				    <input type="text" name="password" class="form-control" id="InputPassword" onblur="passwordOnblur()" placeholder="密码/password">
				  </div>
				</div>
			</div>
			<script>
				function passwordOnblur() {
					//1.声明变量
					var regex= /^[a-zA-Z_]\w{0,9}$/;
					var accountInputNametObj = document.getElementById("InputPassword");
					var value = accountInputNametObj.value; //获取username0bj中的文本
					if(!value)
						msg = "请输入密码："
					else if(!regex. test (value)){
						msg="密码为字母数字下划线1到10位，不能是数字开头"
					}else{
						msg = ""; //将提示消息放入SPAN
					}
					passwordMsg.innerHTML = msg; 
				}
			</script>
		
		
			<!-- 登录按钮 -->
			<input type="submit" name="submit" class="box3" value="立即注册" onclick="submitajax()" />


	<script>
	var ajax;
	var res;
	var InputAccount,InputPassword,InputName;
	var msg2;
	var flag=1;
	function submitajax(){
		InputName =document.getElementById("InputName").value;
		InputAccount =document.getElementById("InputAccount").value;
		InputPassword =document.getElementById("InputPassword").value;
		nameMsg = document.getElementById("nameMsg");
		accountMsg = document.getElementById("accountMsg");
		passwordMsg = document.getElementById("passwordMsg");
		if(InputName && InputAccount && InputPassword){
			if(nameMsg.innerHTML.trim()== "" && passwordMsg.innerHTML.trim()=="" && accountMsg.innerHTML.trim()==""  ){
			var data="name="+InputName+"&account="+InputAccount+"&password="+InputPassword;
			ajax= new XMLHttpRequest();
			ajax.onreadystatechange = function(){	
				if(ajax.readyState==4){
					res =ajax.responseText;
					if(res.trim()== "ok"){
						window.location.href='main.php?accout='+InputAccount+'&tip=注册成功';
					}else{
						msg2 =document.getElementById("msg");
						msg2.innerHTML=res;
						msgblock();
						setTimeout(msgnone, 2000);			
				}
			}		
		}
			ajax.open("GET","../reg.php"+data,true);
			ajax.send(null);
		}else{
			msg2 =document.getElementById("msg");
			msg2.innerHTML="请正确填写表单";
			msgblock();
			setTimeout(msgnone, 2000);	
		}	
		}else{	
			msg2 =document.getElementById("msg");
			msg2.innerHTML="表单填写不完整";
			msgblock();
			setTimeout(msgnone, 2000);	
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
	</script>
	
	
		<a href="login.php" class="box4">已有账号，返回登录</a>
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