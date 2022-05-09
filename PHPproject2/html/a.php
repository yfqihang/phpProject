

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<head>
<script>
function doAjax(){
	var ajax;
	ajax= new XMLHttpRequest();
	ajax.onreadystatechange = function(){
		var res =ajax.responseText;//获取相应内容
		alert(res);
		var x =document.getElementById("showdiv");
		x.innerHTML=res;
	}	
	ajax.open("GET","c.php",true);
	ajax.send(null);
	
}
</script>
<style type="text/css">
	#showdiv{
		border: solid 1px;
		width: 200px;
		height: 100px;
	}
</style>
</head>
<body>
<h3>局部刷新</h3>
<hr />
姓名：<input type="text" id="Name"/><br />
姓别：<input type="text" id="xingbie"/><br />
体重<input type="text" id="w"/><br />
身高：<input type="text" id="h"/><br />
<input type="button" value="测试" onclick="doAjax()" />

</body>
</html>

