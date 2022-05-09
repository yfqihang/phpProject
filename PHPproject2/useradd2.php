<?PHP
  header("Content-Type: text/html; charset=utf8");

//include('./common/connect.php');//链接数据库
$link =mysqli_connect('localhost', 'root','root','php_project')or die('连接失败');



  $name = $_POST['name'];//post获得用户名表单值
  $account = $_POST['account'];
  $password2 = $_POST['password'];

//     $sql = "INSERT  INTO book VALUES (".$id.",".$bookname.",".$author.",".$press.",".$money.")";
// 		$sql = "INSERT  INTO book VALUES (?,?,?,?,?)";
   		
//     $conn->query($sql);//执行sql
  include('./common/connect.php');//链接数据库
  $q="insert into user(name,account,password) values ('$name','$account','$password2')";//向数据库插入表单传来的值的sql
  
  $conn->query($q);

echo "<script> window.location.href='./html/main2.php';</script>" ;
//$conn->close();//关闭数据库
?>