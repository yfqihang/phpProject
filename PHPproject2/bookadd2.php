<?PHP
  header("Content-Type: text/html; charset=utf8");


$link =mysqli_connect('localhost', 'root','root','php_project')or die('连接失败');


  $id = $_GET['id'];//post获得用户名表单值
  $bookname = $_GET['bookname'];
  $author = $_GET['author'];
  $press = $_GET['press'];
  $money = $_GET['money'];

//     $sql = "INSERT  INTO book VALUES (".$id.",".$bookname.",".$author.",".$press.",".$money.")";
// 		$sql = "INSERT  INTO book VALUES (?,?,?,?,?)";
   		
//     $conn->query($sql);//执行sql
  include('./common/connect.php');//链接数据库
if($id && $bookname && $author && $press && $money ){
//	
    $sql = "select * from book where id = '$id'"; 
    $result = $conn->query($sql);
	  if (($result&&mysqli_num_rows($result)>0)) {
  echo"
          <script>
          			alert ('id不能重复');
               window.location.href='./html/main1.php';
          </script>

        ";
  }
  else{
$q="insert into book(id,bookname,author,press,money) values ('$id','$bookname','$author','$press','$money')";//向数据库插入表单传来的值的sql
 $conn->query($q);
 echo"
          <script>
          			alert ('添加成功');
               window.location.href='./html/main1.php';
          </script>

        ";
}}else{
	//如果用户名或密码有空
        echo"
          <script>
          			alert ('表单填写不完整');
								 window.location.href='./html/main1.php';
          </script>

        ";

            //如果错误使用js 1秒后跳转到登录页面重试;              
}
  
  $conn->close();//关闭数据库
?>