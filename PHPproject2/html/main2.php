
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
		right: 5px;
		
		
	}
	.bookadd{
		width: 100px;
		height: 45px;
		
		float:left;
		
		/*right: 200px;*/
		/*background: #337ab7;*/
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
              	
              	
              <form class="form-inline" action="main22.php" method="get">
                <div class="form-group">
                 
                  <div class="input-group">
                    <div class="input-group-addon"><a class="glyphicon glyphicon-lock "></a></div>
                    <input type="text" class="form-control" name="account" id="exampleInputAmount" placeholder="请输入账号：">
              
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">查询</button>
              </form>
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
                  	         $sql = "SELECT * FROM user ";
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
