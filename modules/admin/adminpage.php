<?php
if (!defined('_CODE')) {
    die('Access denied...');
}

$id = getSession('id');

$userQuery = oneRaw("SELECT *FROM users WHERE id = '$id'");

if (!empty($userQuery)) {
    $name = $userQuery['fullname'];
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>

        .nav-link-hover:hover {
            color: #389bf0;
            background-color: #389bf0;
            border-color: #007bff;
        }

        .nav-tabs .nav-item .nav-link {
            border: none !important;
            background-color: transparent !important;
        }

        .nav-tabs .nav-item .nav-link.active {
            border: none !important;
            border-bottom: 5px solid #389bf0 !important;
        }

        /* Thêm shadow cho thẻ li */
        .nav-tabs .nav-item .nav-link {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".nav-link").on("shown.bs.tab", function(e) {
                var targetPane = $(e.target).attr("href");
                $(".tab-pane").removeClass("show active"); // Xóa lớp "show" và "active" khỏi tất cả các tab-pane
                $(targetPane).addClass("show active"); // Thêm lớp "show" và "active" vào tab-pane đang được chọn
            });
        });
    </script>

</head>

<body>

    <div class="container-fluid">

        <!-- Phần content -->

        <div class="row shadow rounded-lg">

            <!-- Content Cột 1 -->

            <div class="col-2 col-sm-2 col-md-2 col-lg-2 border p-2" style="background: linear-gradient(to bottom left, #fe67cb, #ff9a66);">

                <div class="d-flex justify-content-center align-items-center text-light" style="width: 100%; height: 125px;">
                    <div class="d-flex flex-column">
                        <h4 class="font-weight-bold d-flex justify-content-center align-items-center">Andrar Son</h4>
                        <span class="mt-2 d-flex justify-content-center align-items-center">Admin</span>
                    </div>
                </div>

                <div class=" p-2" style="width: 100%; height: 610px;">

                    <ul class="list-unstyled">

                        <!-- Danh sách các mục -->
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 px-2">
                                <span>Home </span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-home"></i></button>
                            </div>
                        </li>

                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 px-2">
                                <span>User management </span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-user"></i></button>
                            </div>
                        </li>

                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>Course</span>
                                <button class="btn btn-sm ml-auto game-button"><i class="fas fa-graduation-cap"></i></button>
                            </div>
                        </li>

                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>Payment management</span>
                                <button class="btn btn-sm ml-auto"><i class="fab fa-cc-visa"></i></button>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>

            <!-- Content - Cột 2 -->

            <div class="col-10 col-sm-10 col-md-10 col-lg-10 border" style="background-color: #f5f5f5;">
                <div class="border" style="height: 125px;"></div>
            </div>

        </div>
</body>

</html>