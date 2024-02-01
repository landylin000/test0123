<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>

    </style>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Elengenza Studio</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <!-- 其他側邊欄內容 ... -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container px-5">
                    <p class="mt-4"><a class="btn btn-secondary" href="layout-static.php"><i class="fa-solid fa-arrow-left"></i></a></p>
                    <div class="card">
                        <h2 class="card-header text-center">編輯老師資訊</h2>
                        <div class="card-body">
                            <form action="doedit_teacher2.php" method="post" enctype="multipart/form-data" style="max-width: 500px; margin: auto;" onsubmit="return validateForm();">
                                <div class="form-group row">
                                    <!-- 左側欄位，放置圖片 -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="teacher_img" class="form-label"></label>
                                            <img src="./img/<?= $row["img"] ?>" class="img-fluid img-thumbnail" id="preview" style="max-width:500px; max-height:500px;" alt="">
                                            <input type="file" class="form-control" id="teacher_img_upload" name="teacher_img_upload" style="max-width:500px;" onchange="previewImage(this)">
                                        </div>
                                    </div>
                                    <!-- 右側欄位，放置文字資訊 -->
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <input type="hidden" class="form-control" id="teacher_id" name="teacher_id" value="<?= $row["teacher_id"] ?>" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="teacher_name" class="form-label">姓名</label>
                                            <input type="text" class="form-control" id="teacher_name" name="teacher_name" value="<?= $row["name"] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="teacher_gender" class="form-label">性別</label>
                                            <input type="hidden" class="form-control" id="teacher_gender" name="teacher_gender" value="<?= $row["gender"] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="teacher_phone" class="form-label">電話</label>
                                            <input type="text" class="form-control" id="teacher_phone" name="teacher_phone" value="<?= $row["phone"] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label for="teacher_email" class="form-label">電子郵件</label>
                                            <input type="text" class="form-control" id="teacher_email" name="teacher_email" value="<?= $row["email"] ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="teacher_introduction" class="form-label ">介紹</label>
                                            <textarea class="form-control" name="teacher_introduction" id="teacher_introduction" rows="10"><?= $row["introduction"] ?></textarea>
                                        </div>
                                        <div class="mb-3 text-center">
                                            <input type="submit" class="btn btn-secondary " name="button" value="儲存資料">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script>
        function validateForm() {
            // 獲取使用者輸入的 email 和 phone
            var email = document.getElementById("teacher_email").value;
            var phone = document.getElementById("teacher_phone").value;

            // 檢查 email 是否為有效的格式
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("請輸入有效的電子郵件地址");
                return false;
            }

            // 檢查 phone 是否為有效的格式，這裡只是一個簡單的檢查方式，實際中可能需要更複雜的驗證邏輯
            var phoneRegex = /^\d{10}$/; // 這裡假設電話是 10 位數字
            if (!phoneRegex.test(phone)) {
                alert("請輸入有效的電話號碼");
                return false;
            }

            // 如果通過了上述檢查，返回 true，提交表單
            return true;
        }

        function previewImage(input) {
            var preview = document.getElementById('preview');
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>