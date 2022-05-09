<?PHP
  header("Content-Type: text/html; charset=utf8");

include('./common/connect.php');//链接数据库
$link =mysqli_connect('localhost', 'root','root','php_project')or die('连接失败');


  $name = $_POST['name'];//post获得用户名表单值
  $account = $_POST['account'];
  $password = $_POST['password'];
  $sql = "select * from user where account = '$account'"; 
  $result = $conn->query($sql);
	
//     $sql = "INSERT  INTO book VALUES (".$id.",".$bookname.",".$author.",".$press.",".$money.")";
// 		$sql = "INSERT  INTO book VALUES (?,?,?,?,?)";
   		
//     $conn->query($sql);//执行sql
   		$d = "delete  FROM user WHERE account =".$account;
      $conn->query($d);
			$stmt = mysqli_prepare($link,'insert into `user`values (?,?,?)');
					mysqli_stmt_bind_param($stmt,'sss', $name,$account,$password);
					$i=mysqli_stmt_execute($stmt);

echo "<script>setTimeout(function(){window.location.href='./html/main2.php';});</script>" ;
       

//$conn->close();//关闭数据库
?>