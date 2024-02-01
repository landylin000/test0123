<?php
// del_teacher.php

require_once("./db_violin.php");

$id = $_GET["id"];

$sql = "UPDATE teacher SET valid='0' WHERE teacher_id=$id";

if ($conn->query($sql)) {
    echo "刪除成功";
} else {
    echo "刪除資料錯誤: " . $conn->error;
}

$conn->close();

// 選擇重新導向到你的教師列表頁面
header("location: layout-static.php");
?>