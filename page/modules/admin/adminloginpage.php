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

    <div class="container-fluid bg-gradient vh-100" style="background: linear-gradient(to bottom left, #724cbd, #ed8c61);">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">

            <div>
                <div class="row mb-2">
                    <div class="col">
                        <div class="text-light font-weight-bold" style="width: 550px; height: 150px; border-radius: 20px;">
                            <div class="p-2 d-flex justify-content-center align-items-center" style="flex-direction: column;">
                                <h1>English and Game</h1>
                                <h1>Project</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="bg-white" style="width: 550px; height: 450px; border-radius: 20px;">
                            <div class="p-4 d-flex justify-content-center align-items-center" style="flex-direction: column;">

                                <h1>Welcome Back</h1>
                                <span>Fill out the information below in order to access your account</span>

                                <input type="text" class="mt-4 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Email" style="width: 100%; height: 50px; border-radius: 10px;">
                                <input type="text" class="mt-3 p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Password" style="width: 100%; height: 50px; border-radius: 10px;">
                                <button type="button" class="btn btn-primary mt-4 font-weight-bold" style="width: 150px; height: 50px; border-radius: 10px;">Sign In</button>
                                <span class="mt-4">
                                    Don't have an account?
                                    <a href="#" class="text-decoration-none">
                                        <strong class="text-primary">Sign Up here</strong>
                                    </a>
                                </span>
                                <a href="#forget" class="text-decoration-none">
                                    <button type="button" class="btn mt-2 font-weight-bold shadow" style="width: 180px; height: 40px; border-radius: 5px;">Forget Password</button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>