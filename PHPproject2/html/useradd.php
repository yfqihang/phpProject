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
	<form action="../useradd2.php" method="post">
            <h3>新增用户：</h3>

            <hr>
                  	             <p>姓名：<span class="a1" id="as"><input type="text" name="name" ></span> <hr></p>
                  	             <p>账号 ：<span class="a1" id="as"><input type="text" name="account" ></span> <hr></p>
                  	             <p>密码 ：<span class="a1" id="as"><input type="text" name="password" ></span> <hr></p>
                  	         

            

            <button type=submit>立即添加</button>

             
            <div></div>



        </form>

</body>

</html>