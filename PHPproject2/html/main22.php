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
                <h3 class="panel-title">用户信息<span class="glyphicon glyphicon-leaf pull-right"></span></h3>
                
              </div>
              <div class="pane2">
              <div class="bookadd">
              	<a class="btn btn-success" href="useradd.php" id="bookadd">新增用户</a>
              
              </div>
             <div class="chaxun">
              	
              	
                <a  class="btn btn-default btn-lg active" href="main2.php">返回</a>
             
           </div>
           </div>
           
           
           
             <div class="panel-body" style="width: 100%; height: 100%;">
               
                  <table class="table table-hover table-striped table-bordered" style="margin-top: 10px">
                      <thead>
                          <tr>
                              <th>姓名</th>
                              <th>账号</th>
                              <th>密码</th>
                              <th class="text-center">操作</th>
                          </tr>
                      </thead>
                      <tbody>
                      
                      
                      <?php 
                  	header("Content-Type: text/html; charset=utf8");
                  		include('../common/connect.php');//链接数据库
                  	//3.执行sql语句，并实现解析和遍历
                  	if($_GET["account"] ==null){
                  		echo "<tr><td>表单为空</td></tr>";
                  	}else{
                  			$sql = "SELECT * FROM user where account =".$_GET['account'];
                  	         foreach ($conn->query($sql) as $row) {
                  	             echo "<tr>";
                  	             echo "<td>{$row['name']}</td>";
                  	             echo "<td>{$row['account']}</td>";
                  	             echo "<td>{$row['password']}</td>";
                  	             echo "<td class='text-center'>";
//                	             	<a href='edit.php?id=({$row['id']})'>修改</a>
                              	 echo "<a class='btn btn-primary btn-sm ' href='useredit.php?account=({$row['account']})'>编辑</a>";
         	                     echo "<a class='btn btn-danger btn-sm' href='../userdelete.php?account=({$row['account']})'>删除</a></td>";
                  	             echo "<tr>";
       }
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
