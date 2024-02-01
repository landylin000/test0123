<?php
require_once("./db_violin.php");

if (!isset($_POST["teacher_name"])) {
    echo "請循正常管道進入";
    exit;
}

$name = $_POST["teacher_name"];
$phone = $_POST["teacher_phone"];
$email = $_POST["teacher_email"];
$img = $_POST["teacher_img"];
$introduction = $_POST["teacher_introduction"];

if (empty($name) || empty($introduction)) {
    echo "請輸入必要欄位";
    exit;
}

$sql = "INSERT INTO `teacher` (`name`,`phone`, `email`, `img`, `introduction`,`valid`) VALUES ('$name', '$phone', '$email', '$img', '$introduction', 1)";
if ($conn->query($sql)) {
    echo "成功新增老師";
} else {
    echo "新增老師失敗：" . $conn->error;
}

$conn->close();

header("location: layout-static.php");
?>
