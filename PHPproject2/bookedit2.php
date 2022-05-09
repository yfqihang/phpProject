<?PHP
  header("Content-Type: text/html; charset=utf8");

include('./common/connect.php');//链接数据库
$link =mysqli_connect('localhost', 'root','root','php_project')or die('连接失败');


  $id = $_POST['id'];//post获得用户名表单值
  $bookname = $_POST['bookname'];
  $author = $_POST['author'];
  $press = $_POST['press'];
  $money = $_POST['money'];
  $sql = "select * from user where id = '$id'"; 
  $result = $conn->query($sql);
	
//     $sql = "INSERT  INTO book VALUES (".$id.",".$bookname.",".$author.",".$press.",".$money.")";
// 		$sql = "INSERT  INTO book VALUES (?,?,?,?,?)";
   		
//     $conn->query($sql);//执行sql
   		$d = "delete  FROM book WHERE id =".$id;
      $conn->query($d);
			$stmt = mysqli_prepare($link,'insert into `book`values (?,?,?,?,?)');
					mysqli_stmt_bind_param($stmt,'issss', $id, $bookname,$author,$press,$money);
					$i=mysqli_stmt_execute($stmt);

echo "<script>setTimeout(function(){window.location.href='./html/main1.php';});</script>" ;
       

//$conn->close();//关闭数据库
?>