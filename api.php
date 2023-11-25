<?php
//设置json格式头部
header('Content-type: application/json');
//载入数据库文件
require("data.php");
//检查是否有指定id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    //查询指定id的记录
    $sql = "SELECT * FROM soul WHERE id = $id+0";
} else {
    //查询随机一条记录
    $sql = "SELECT * FROM soul ORDER BY RAND() LIMIT 1";
}
$result = mysqli_query($conn, $sql);
//检查是否查询成功
if ($result) {
    $row = mysqli_fetch_assoc($result);
    //检查是否找到记录
    if (mysqli_num_rows($result) > 0) {
        echo json_encode(array(
            "code" => 0,
            "message" => "OK",
            "data" => array(
                "id" => $row["id"],
                "title" => $row["title"],
                "author" => $row["author"],
                "from" => $row["from"]
            )
        ));
    } else {
        echo json_encode(array(
            "code" => 1,
            "message" => "No results found",
            "data" => null
        ));
    }
} else {
    echo json_encode(array(
        "code" => 2,
        "message" => "Error executing query",
        "data" => null
    ));
}
