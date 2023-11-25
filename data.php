<?php
$conn = mysqli_connect("localhost", "nows", "nows11"); //连接数据库地址、用户名、密码
mysqli_query($conn, "set names 'utf8'"); //数据库编码
mysqli_select_db($conn, "nows"); //数据库名称
