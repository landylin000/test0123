<?php
require_once("./db_violin.php");


  
    $id = $_POST["teacher_id"];
    $name = $_POST["teacher_name"];
    $introduction = $_POST["teacher_introduction"];

    // 處理上傳的圖片
    $img = $row["img"]; // 預設圖片名稱

    if (isset($_FILES["teacher_img_upload"]) && $_FILES["teacher_img_upload"]["error"] === 0) {
        $uploadDir = "img/"; // 修改路徑
        $uploadFile = $uploadDir . basename($_FILES["teacher_img_upload"]["name"]);

        if (move_uploaded_file($_FILES["teacher_img_upload"]["tmp_name"], $uploadFile)) {
            $img = basename($_FILES["teacher_img_upload"]["name"]);
        } else {
            echo "可能是文件太大，請確認 PHP 的設定。\n";
        }
    }

    // 更新資料庫中的資料
    $sql = "UPDATE `teacher` SET `name`='$name', `img`='$img', `introduction`='$introduction' WHERE teacher_id=$id";

    if ($conn->query($sql)) {
        echo "成功更新老師";
    } else {
        echo "更新老師失敗：" . $conn->error;
    }

    $conn->close();
    header("Location: layout-static.php");
?>
