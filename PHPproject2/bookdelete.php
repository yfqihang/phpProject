<?PHP
  header("Content-Type: text/html; charset=utf8");

//include('./common/connect.php');//链接数据库、
			$link = mysql_connect("127.0.0.1","root","root");
			mysql_select_db("php_project");
			$d = "delete  FROM book WHERE id =".$_GET['id'];
      mysql_query($d);
			$link = mysql_connect("127.0.0.1","root","root");
			mysql_select_db("php_project");
			$result= mysql_query("select * from book");
			$total=mysql_num_rows($result);
// 		var_dump($total);
   		var_dump($_GET['id']);
   		$IntId=(int)$_GET['id'];
   		var_dump($IntId);
   		$link2 =mysqli_connect('127.0.0.1', 'root','root','php_project')or die('连接失败');
   		for($i=$IntId;$i<=$total;$i++){
// 			var_dump($i);
//				$stmt = mysqli_prepare($link2,'update book set id=? where id=?');
				$s=$i+1;
//				mysqli_stmt_bind_param($stmt,'ii', $i,$s);
//				mysqli_stmt_execute($stmt);
   			$u="update book set id= '$i'where id ='$s'";
   			mysql_query($u);
   		}
		$page2=$_GET['page'];
		$a="alter table book  AUTO_INCREMENT =1";
		var_dump($a);
   	var_dump(mysql_query($a));
echo "<script>setTimeout(function(){window.location.href='./html/main1.php?page={$page2}';});</script>" 
       
      

//$conn->close();//关闭数据库
?>