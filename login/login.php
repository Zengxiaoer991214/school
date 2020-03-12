<?php
session_start();
    $con = mysqli_connect("localhost","root","12345678","db_blog");
    if(!$con){
        echo "die";
    }
 
    $name = $_POST['name'];//post获得用户名表单值

    $passowrd = $_POST['password'];//post获得用户密码单值

    if ($name && $passowrd){//如果用户名和密码都不为空
             $sql = "select * from user2 where (username = '$name') and (password='$passowrd')";//检测数据库是否有对应的username和password的sql
             $result = mysqli_query($con,$sql);//执行sql
             $rows=mysqli_num_rows($result);//返回一个数值
                        /*$sql2 = "select * from user2"; //这里login是你要查询的表
                        $obj = mysqli_query($con,$sql2); //执行查询￥
                        $new = mysqli_fetch_all($obj,MYSQLI_ASSOC); //将查询结果翻译成数组
                        var_
						dump($new);echo "<br/>"; //输出结果 
                        */
            $row = mysqli_fetch_array($result);
             if($rows){//0 false 1 true
                    $_SESSION['name']=$name;
                    $_SESSION['asd']="asd";
                    $_SESSION['password']=$passowrd;
                    $_SESSION['isadmin']=$row['isadmin'];
				 	$_SESSION['id']=$row['id'];
				 	$_SESSION['nickname']=$row['nickname'];
				  echo "
                    <script>
                            setTimeout(function(){window.location.href='../index.php';},1000);
                    </script>
";				$_POST['warning']=0;
                    
                     ;
			 }
		else
		{ 
			echo"<script>history.go(-1);</script>";
			$_POST['warning']=1;
		}
		
	}
	?>