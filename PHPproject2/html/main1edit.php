
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="../jQuery/jquery-3.6.0.js"></script>
    
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
	.HuaKuan{
		position: relative;
		display: block;
		float: right;
		width: 280px;
		margin-top: -25px;
	}
	.YeShu{
		position:relative;
		left: -33px;
		top:25px;
	}
	.table-striped>tbody>tr>td{
		height: 45px;
	}
   </style>
</head>
<body">
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
              	
              	
              <form class="form-inline" action="main11.php" method="get">
                <div class="form-group">
                 
                  <div class="input-group">
                    <div class="input-group-addon"><a class="glyphicon glyphicon-lock "></a></div>
                    <input type="text" class="form-control" name="id" id="exampleInputAmount" placeholder="请输入序号：">
              
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
                              <th>序号</th>
                              <th>书名</th>
                              <th>作者</th>
                              <th>出版社</th>
                              <th>价格</th>
                              <th>数量</th>
                              <th class="text-center">操作</th>
                          </tr>
                      </thead>
                      <tbody>
                      
                      <?php 
                  		header("Content-Type: text/html; charset=utf8");
                  		include "page.class.php";
                  	//3.执行sql语句，并实现解析和遍历
                  		$link = mysql_connect("127.0.0.1","root","root");
						mysql_select_db("php_project");
                  		$result= mysql_query("select * from book");
						$total=mysql_num_rows($result);
						$num=10;
						$page=new Page($total,$num);
						$sql = "ALTER TABLE book order by id ASC";
						 mysql_query($sql);
						$sql="select * from book {$page->limit} ";
						$result = mysql_query($sql);
                  	         
                  	         $i=1;
                  	         while($row=mysql_fetch_assoc($result)){
//                	         	var_dump($row);
								var_dump($page->listRows);
								if($i==$_GET['id']){
									echo "<tr>";
                  	             	echo "<td >{$row['id']}</td>";
                  	             	echo "<td contenteditable='true' style='background: #9F5DD9;color:#9C94A3;'>{$row['bookname']}</td>";
                  	            	echo "<td contenteditable='true' style='background: #9F5DD9;color:#9C94A3;'>{$row['author']}</td>";
                  	             	echo "<td contenteditable='true' style='background: #9F5DD9;color:#9C94A3;'>{$row['press']}</td>";
                  	             	echo "<td contenteditable='true' style='background: #9F5DD9;color:#9C94A3;'>{$row['money']}</td>";
                  	             	echo "<td contenteditable='true' style='background: #9F5DD9;color:#9C94A3;'>{$row['num']}</td>";
                  	             	echo "<td class='text-center'>";
//                	             	<a href='edit.php?id=({$row['id']})'>修改</a>
                              	 	echo "<a class='btn btn-primary btn-sm ' href='main1edit.php?id={$row['id']}&page={$page->page}'>确定</a>";
         	                     	echo "</tr> ";
								}else{
									echo "<tr>";
                  	             	echo "<td >{$row['id']}</td>";
                  	             	echo "<td>{$row['bookname']}</td>";
                  	             	echo "<td>{$row['author']}</td>";
                  	             	echo "<td>{$row['press']}</td>";
                  	             	echo "<td>{$row['money']}</td>";
                  	             	echo "<td>{$row['num']}</td>";
                  	            	 echo "<td class='text-center'>";
//                	             	<a href='edit.php?id=({$row['id']})'>修改</a>
                              		echo "</tr> ";
								}
								$i++;
                  	             
       }
       						echo "</tbody>  </table>";
		echo '<nav aria-label="Page navigation" >
					<div class="HuaKuan">
                  	<ul class="YeShu">',$page->Fpage(array(2)),'</ul>
                  	<ul class="pagination ">',$page->Fpage(array(4,5,6)),'</ul>
                  	</div>
                  	
                  </nav>';

  
  ?>
 

                   
                  
              </div>
                </div>
        </div>


          </div>
</div>
</body>
</html>
