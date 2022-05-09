
<?php
 header("Content-Type: text/html; charset=utf-8");
include('./common/connect.php');//链接数据库
  $account = $_GET['account'];//post获得用户名表单值
  $passowrd2 = $_GET['password'];//post获得用户密码单值
if ($account && $passowrd2){		
       $sql = "select * from user where account='$account'and password='$passowrd2'";
       $result = $conn->query($sql);//执行sql
       echo $conn->error; 
       $rows=$result->fetch_assoc();//返回一个数值
       if($rows){
       		echo "ok";	
       }else{//如果用户名或密码有空
     		 echo "账号或密码错误";
  		}
  }

  $conn->close();//关闭数据库
?>