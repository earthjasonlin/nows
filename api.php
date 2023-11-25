<?php
//设置json格式头部
header('Content-type: application/json');
//载入数据库文件
require("data.php");
//查询随机一条记录
$sql = "SELECT * FROM soul ORDER BY RAND() LIMIT 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
//输出json
echo json_encode(array('code' => 1, 'data' => $row['title']));