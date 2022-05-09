<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

            form{
                width: 800px;
                height: 700px;
                border: 1px solid red;
                margin: auto;
                background: url(images/tree.jpg) no-repeat -40px 300px;
            }

            form h3{
                margin-left: 200px;
            }

            p{
                margin-left: 200px;
            }

            hr{
                margin-left: 200px;
            }

             .a1{
                 margin-left: 85px;
             }

             .a2{
                margin-left: 110px;
                
            }


            input{
            background: url(images/attention.png) no-repeat right;
            
            }

            button{
                margin-left: 200px;
                background: rgb(81, 187, 125);
                color: white;
            }

            span#as:hover input{
                width: 300px;
                height: 40px;
            }

           
    </style>

</head>

<body>
	<form action="../useredit2.php" method="post">
            <h3>用户信息修改：</h3>

            <hr>
        <?php 
                  	header("Content-Type: text/html; charset=utf8");
                  		include('../common/connect.php');//链接数据库
                  	//3.执行sql语句，并实现解析和遍历
                  	        $sql = "SELECT * FROM user WHERE account =".$_GET['account'];
                  	         foreach ($conn->query($sql) as $row) {}
                  	             echo '<p>姓名 ：<span class="a1" id="as"><input type="text" name="name" readonly value="'.$row['name'].'"></span> <hr></p>';
                  	             echo '<p>账号 ：<span class="a1" id="as"><input type="text" name="account" disabled="disabled"  value="'.$row['account'].'"></span> <hr></p>';
                  	             echo '<p>密码 ：<span class="a1" id="as"><input type="text" name="password" value="'.$row['password'].'"></span> <hr></p>';
                  	          
                  	       $sql2 = "delete * FROM user WHERE account =".$_GET['account'];
                  	       $conn->query($sql2);
       
  
  ?>

            

            <button type=submit>立即修改</button>

             
            <div></div>



        </form>

</body>

</html>