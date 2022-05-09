<?PHP
  header("Content-Type: text/html; charset=utf8");

include('./common/connect.php');//链接数据库
//$link =mysqli_connect('localhost', 'root','root','php_project')or die('连接失败');

//
//$id = $_POST['id'];//post获得用户名表单值
//$bookname = $_POST['bookname'];
//$author = $_POST['author'];
//$press = $_POST['press'];
//$money = $_POST['money'];

//     $sql = "INSERT  INTO book VALUES (".$id.",".$bookname.",".$author.",".$press.",".$money.")";
// 		$sql = "INSERT  INTO book VALUES (?,?,?,?,?)";

   		$d = "delete  FROM user WHERE account =".$_GET['account'];
       $conn->query($d);
//$stmt = mysqli_prepare($link,'delete into `book`values (?,?,?,?,?)');
//					mysqli_stmt_bind_param($stmt,'issss', $id, $bookname,$author,$press,$money);
//					$i=mysqli_stmt_execute($stmt);

echo "<script>alert ('删除成功');setTimeout(function(){window.location.href='./html/main2.php';});</script>" 
       
      

//$conn->close();//关闭数据库
?>