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
	<form action="../bookadd2.php" method="get">
            <h3>新增图书：</h3>

            <hr>
                  	             <p>序号 ：<span class="a1" id="as1"><input type="text" name="id" ></span> <hr></p>
                  	             <p>书名 ：<span class="a1" id="as"><input type="text" name="bookname" ></span> <hr></p>
                  	             <p>作者 ：<span class="a1" id="as"><input type="text" name="author" ></span> <hr></p>
                  	             <p>出版社 ：<span class="a1" id="as"><input type="text" name="press" ></span> <hr></p>
                  	             <p>价格 ：<span class="a1" id="as"><input type="text" name="money" ></span> <hr></p>
                  	             <!--echo '<p>书名 ：<span class="a1" id="as"><input type="text" name="bookname" value="'.$row['bookname'].'"></span> <hr></p>';
                  	             echo '<p>作者 ：<span class="a1" id="as"><input type="text" name="author" value="'.$row['author'].'"></span> <hr></p>';
                  	             echo '<p>出版社 ：<span class="a1" id="as"><input type="text" name="press" value="'.$row['press'].'"></span> <hr></p>';
                  	             echo '<p>价格 ：<span class="a1" id="as"><input type="text" name="money" value="'.$row['money'].'"></span> <hr></p>';
                  	 -->

            

            <button type=submit>立即添加</button>

             
            <div></div>



        </form>

</body>

</html>