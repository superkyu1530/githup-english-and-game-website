<?php
//kiem tra trang thai dang nhap
//if(!isLogin()){
//redirect('?module=auth&action=login');
//}
?>
<!DOCTYPE html>
<html>

<head>
    <title>User Client Page</title>
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

        h1 {
            text-decoration: none;
        }

        /* Xóa gạch chân khi hover và active */
        .home-link:hover,
        .home-link:active {
            text-decoration: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            $(".nav-link").on("shown.bs.tab", function(e) {
                var targetPane = $(e.target).attr("href");
                $(".tab-pane").removeClass("show active"); // Xóa lớp "show" và "active" khỏi tất cả các tab-pane
                $(targetPane).addClass("show active"); // Thêm lớp "show" và "active" vào tab-pane đang được chọn
            });

            $(".home-link").click(function(e) {
                e.preventDefault();
                $(".tab-pane").removeClass("show active");
                $($(this).attr("href")).addClass("show active");
                // Tải lại trang
                location.reload();
            });
        });
    </script>

</head>

<body>

    <div class="container-fluid">

        <div class="d-flex align-items-center">
            <h1 class="mt-4 mb-4">
                <a class="home-link active" data-toggle="tab" href="#tab-panel-4">ADMIN</a>
            </h1>

            <!-- <h1 class="mt-4 mb-4">
                <a href="?module=admin&action=adminloginpage">Login</a>
            </h1> -->

            <div class="ml-auto button-container">
                <button class=" mt-4 mr-4 rounded-circle overflow-hidden" style="width: 50px; height: 50px; padding: 0;" onclick="toggleInfoPanel()">
                    <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; border-radius: 50%; overflow: hidden;">
                        <img src="../page/assets/images/courses-02.jpg" alt="avatar" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </button>

                <!-- Bảng menu -->
                <div id="infoPanel" class="info-panel mr-5 shadow" style="display: none; width: 350px; height: 450px; border-radius: 10px; background-color: #f1f4f9;">
                    <!-- Your information panel content goes here -->

                    <div>
                        <span>Account</span>

                        <ul class="list-unstyled d-flex flex-column ">

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-dollar-sign ml-2 mr-4"></i> Payment Options</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-bell ml-2 mr-4"></i> Notification Settings</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-edit ml-2 mr-4"></i> Edit Profile</li>

                        </ul>
                    </div>

                    <div>
                        <span>General</span>

                        <ul class=" list-unstyled d-flex flex-column ">

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center " style="width: 100%; height: 50px; border-radius: 10px"> <i class="fa fa-question ml-2 mr-4"></i> Support</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center " style="width: 100%; height: 50px; border-radius: 10px"> <i class="fa fa-file ml-2 mr-4"></i> Terms of Service</li>

                        </ul>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <a href="?module=auth&action=logout"><button class="btn btn-danger"> <i class="fa fa-sign-out-alt"></i> Logout</button> </a>
                    </div>
                </div>
            </div>
            <style>
                .button-container {
                    position: relative;
                }

                .info-panel {
                    position: absolute;
                    top: calc(100% + 10px);
                    right: -50px;
                    z-index: 2;
                    background-color: white;
                    padding: 10px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }
            </style>

            <script>
                function toggleInfoPanel() {
                    var infoPanel = document.getElementById("infoPanel");
                    if (infoPanel.style.display === "none") {
                        infoPanel.style.display = "block";
                    } else {
                        infoPanel.style.display = "none";
                    }
                }
            </script>
        </div>

        <div class="d-flex justify-content-center align-items-center rounded mt-8" style="background-color: #389bf0;">

            <ul class="nav nav-tabs w-100 mt-1 text-center" style="margin-left: 100px; margin-right: 100px;">

                <!-- <li class="nav-item">
                    <a class="home-link active" data-toggle="tab" href="#tab-panel-0"></a>
                </li> -->

                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-0">Course</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-1">Exercise</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-2">Entertaining Game</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-3">Learning Support</a>
                </li>

            </ul>
        </div>

        <div class="tab-content mt-4">

            <div id="tab-panel-4" class="tab-pane fade show active">
                1
            </div>

            <div id="tab-panel-0" class="tab-pane fade">
                2
            </div>

            <div id="tab-panel-1" class="tab-pane fade">
                3

            </div>

            <div id="tab-panel-2" class="tab-pane fade">
                4
            </div>

            <div id="tab-panel-3" class="tab-pane fade">
                5
            </div>

        </div>

    </div>

</body>

</html>