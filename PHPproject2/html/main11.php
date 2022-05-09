
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="..js/jquery.js"></script>
    
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
   <style type="text/css">
	
	
	.btn-success{
		position: relative;
		width: 80px;
		height: 32px;
		/*right: 0px;*/
		position: relative;
		left: 5px;
	}
	.pane2{
		position: relative;
		top: 7px;
	}
	.chaxun{
		float: right;
		position: relative;
		right: 15px;
		
		
	}
	.bookadd{
		width: 100px;
		height: 45px;
		
		float:left;
		
		/*right: 200px;*/
		/*background: #337ab7;*/
	}
	.btn-default{
		height: 32px;
		text-align: center;
		font-size: 5px;
		height: 34px;
		background: ;
	}
   </style>
</head>
<body>
<!--图书馆管理系统页面-->

        
        <div class="col-md-10" style="width: 100%; height: 100%;">
            <div class="panel panel-primary" style="width: 100%; height: 100%;">
              <div class="panel-heading clearfix">
                <h3 class="panel-title">图书馆信息<span class="glyphicon glyphicon-leaf pull-right"></span></h3>
                
              </div>
              <div class="pane2">
              <div class="bookadd">
              	<a class="btn btn-success" href="bookadd.php" id="bookadd">新增图书</a>
              
              </div>
              <div class="chaxun">
              	
              	
                <a  class="btn btn-default btn-lg active" href="main1.php">返回</a>
             
           </div>
           </div>
           
           
           
             <div class="panel-body" style="width: 100%; height: 100%;">
               
                  <table class="table table-hover table-striped table-bordered" style="margin-top: 10px">
                      <thead>
                          <tr>
                              <th>序号</th>
                              <th>书名</th>
                              <th>作者</th>
                              <th>出版社</th>
                              <th>价格</th>
                              <th class="text-center">操作</th>
                          </tr>
                      </thead>
                      <tbody>
                      
                      
                      <?php 
                  	header("Content-Type: text/html; charset=utf8");
                  		include('../common/connect.php');//链接数据库
                  	//3.执行sql语句，并实现解析和遍历
                  	if($_GET["id"] ==null){
                  		echo"
                  		<script>
                  			alert('表单填写不完整');
                  			window.location.href = './main1.php';
                  		</script>
                  		
                  		";
                  	}else{
                  	         $sql = "SELECT * FROM book where id =".$_GET['id'];
                  	         $result = $conn->query($sql);
                  	         if ((mysqli_num_rows($result)==0)) { 
                  	         	echo"
                  	         <script>
                  	         	alert('没有对应的书籍');
                  	         	window.location.href = './main1.php';
                  	         </script>
                  	         
                  	         "; }else{
                  	         	foreach ($result as $row) {
                  	             echo "<tr>";
                  	             echo "<td>{$row['id']}</td>";
                  	             echo "<td>{$row['bookname']}</td>";
                  	             echo "<td>{$row['author']}</td>";
                  	             echo "<td>{$row['press']}</td>";
                  	             echo "<td>{$row['money']}</td>";
                  	             echo "<td class='text-center'>";
                              	 echo "<a class='btn btn-primary btn-sm ' href='bookedit.php?id=({$row['id']})'>编辑</a>";
         	                     echo "<a class='btn btn-danger btn-sm' href='../bookdelete.php?id=({$row['id']})'>删除</a></td>";
                  	             echo "<tr>";
                  	             }}
                  	         
       }
  ?>
 

                    </tbody>
                  </table>

              </div>
                </div>
        </div>


          </div>
</div>
</body>
</html>
