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
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            師資管理
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="layout-static.php">所有老師</a>
                                <a class="nav-link" href="layout-static2.php">新增老師</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>
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
                <div class="container-fluid px-6" style="max-width:700px;">
                    <p class="mt-4"><a class="btn btn-secondary" href="layout-static.php"><i class="fa-solid fa-arrow-left"></i></a></p>
                    <!-- <h1 class="mt-4" >新增老師</h1> -->

                    <!-- <p class="mt-4"><a class="btn btn-secondary" href="layout-static.php"><i class="fa-solid fa-border-all"></i>所有老師</a></p> -->

                    <!-- <ol class="breadcrumb mb-1">
                        <li class="breadcrumb-item"><a class="btn bnt-secondary" href="layout-static.php"><i class="fa-solid fa-border-all"></i>所有老師</a></li>
                        <li class="breadcrumb-item active">老師</li>
                    </ol> -->
                    <div class="card mb-4 mx-auto" style="max-width:800px;">
                        <h2 class="card-header text-center">新增老師</h2>
                        <div class="card-body">
                            <form action="add_teacher2.php" method="post" enctype="multipart/form-data" style="max-width: 500px; margin: auto;" onsubmit="return validateForm();">
                                <!-- <table class="mx-auto" class="border" cellpadding="10"> -->
                                <div class="mb-3">
                                    <label for="teacher_name" class="form-label">姓名</label>
                                    <input type="text" class="form-control" id="teacher_name" name="teacher_name">
                                </div>
                                <div class="mb-3">
                                    <label for="teacher_gender" class="form-label">性別</label>
                                    <input type="text" class="form-control" id="teacher_gender" name="teacher_gender">
                                </div>
                                <div class="mb-3">
                                    <label for="teacher_phone" class="form-label">電話</label>
                                    <input type="tel" class="form-control" id="teacher_phone" name="teacher_phone">
                                </div>
                                <div class="mb-3">
                                    <label for="teacher_email" class="form-label">電子郵件</label>
                                    <input type="email" class="form-control" id="teacher_email" name="teacher_email">
                                </div>
                                <div class="mb-3">
                                    <label for="teacher_img" class="form-label">圖片</label>
                                    <img src="./img/<?= $row["img"] ?>" class="img-fluid img-thumbnail" id="preview" style="max-width:500px; max-height:500px;" alt="">
                                    <input type="file" class="form-control" id="teacher_img_upload" name="teacher_img_upload" onchange="previewImage(this)">
                                </div>
                                <div class="mb-3">
                                    <label for="teacher_introduction" class="form-label">介紹</label>
                                    <textarea class="form-control" name="teacher_introduction" id="teacher_introduction" rows="10"></textarea>
                                </div>

                                <!-- <tr>
                                        <td>姓名</td>
                                        <td><input type="text" id="teacher_name" name="teacher_name" required><br></td>
                                    </tr>
                                    <tr>
                                        <td>電話</td>
                                        <td><input type="tel" id="teacher_phone" name="teacher_phone" required><br></td>
                                    </tr>
                                    <tr>
                                        <td>電子郵件</td>
                                        <td><input type="email" id="teacher_email" name="teacher_email" required><br></td>
                                    </tr>
                                    <tr>
                                        <td>圖片</td>
                                        <td><input type="file" id="teacher_img" name="teacher_img"><br></td>
                                    </tr>
                                    <tr>
                                        <td>介紹</td>
                                        <td><textarea id="textarea" rows="3" cols="20" name="teacher_introduction"></textarea></td>
                                    </tr> -->
                                <div class="mb-3 text-center">
                                    <input type="submit" class="btn btn-secondary" name="button" value="新增資料">
                                    <input type="reset" class="btn btn-secondary" name="button2" value="重新填寫" onclick="clearPreview()">
                                </div>


                                <!-- <tr>
                                        <td colspan="2" class="text-center">
                                            <input type="submit" class="btn btn-secondary" name="button" value="新增資料">
                                            <input type="reset" class="btn btn-secondary" name="button2" value="重新填寫">
                                        </td>
                                    </tr> -->
                                <!-- </table> -->
                            </form>
                        </div>
                    </div>
                    <div style="height: 100vh"></div>
                    <div class="card mb-4">
                        <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the end of the static navigation demo.</div>
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
        //重置預覽圖片
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

        function clearPreview() {
            var preview = document.getElementById('preview');
            preview.src = "";
        }

        // function previewImage(input) {
        //     var preview = document.getElementById('preview');
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();

        //         reader.onload = function(e) {
        //             preview.src = e.target.result;
        //         }

        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }
    </script>
</body>

</html>