
 <?php
 header("Content-Type: text/html; charset=utf-8");
include('../common/connect.php');//链接数据库
  $account = $_GET['account'];//post获得用户名表单值
  $passowrd2 = $_GET['password'];//post获得用户密码单值
  $name= $_GET['name'];
if ($account && $passowrd2 && $name){		
       $sql = "select * from user where account='$account'";
       $result = $conn->query($sql);//执行sql
       $rows=$result->fetch_assoc();//返回一个数值
       if($rows){
       		echo "账号已存在";	
       }else{//如果用户名或密码有空
  		$q="insert into user(name,account,password) values ('$name','$account','$passowrd2')";//向数据库插入表单传来的值的sql
		$conn->query($q);
     	 echo "ok ";
  }
  }

  $conn->close();//关闭数据库
?>