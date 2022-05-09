<!DOCTYPE html> 
<html> 
<head> 
<meta charset=" utf-8"> 
<meta name="author" content="https://www.jb51.net/" />
<title>脚本之家</title>
<style type="text/css">
#tx{
width:100px;
}
#pwd{
display:none;
width:100px;
}
</style>
<script type="text/javascript"> 
window.onload=function(){
var tx=document.getElementById("tx");
var pwd=document.getElementById("pwd"); 
tx.onfocus=function(){ 
if(this.value!="密码") 
return; 
this.style.display="none"; 
pwd.style.display="block"; 
pwd.value=""; 
pwd.focus(); 
} 
pwd.onblur=function(){ 
if(this.value!=""){
return; 
} 
this.style.display="none"; 
tx.style.display=""; 
tx.value="密码"; 
} 
}
</script> 
</head> 
<body> 
<input type="text" value="密码" id="tx"/> 
<input type="password" id="pwd" /> 
</body> 
</html> 