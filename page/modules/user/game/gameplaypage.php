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

        .countdown {
            display: flex;
            justify-content: center;
        }

        .countdown-item {
            text-align: center;
            margin: 0 10px;
        }

        .countdown-item span {
            font-size: 2rem;
            font-weight: bold;
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

        function toggleInfoPanel() {
            var infoPanel = document.getElementById("infoPanel");
            if (infoPanel.style.display === "none") {
                infoPanel.style.display = "block";
            } else {
                infoPanel.style.display = "none";
            }
        }

        // // Thiết lập thời gian bắt đầu và thời gian kết thúc
        // var startTime = new Date().getTime();
        // var endTime = startTime + (60 * 60 * 1000); // 1 giờ

        // // Cập nhật đồng hồ đếm ngược mỗi giây
        // var countdown = setInterval(function() {
        //     // Lấy thời gian hiện tại
        //     var now = new Date().getTime();

        //     // Tính toán khoảng cách thời gian giữa hiện tại và thời gian kết thúc
        //     var distance = endTime - now;

        //     // Tính toán các đơn vị thời gian
        //     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //     var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //     // Hiển thị giá trị vào các phần tử HTML
        //     document.getElementById("hours").innerHTML = hours + " hours";
        //     document.getElementById("minutes").innerHTML = minutes + " minutes";
        //     document.getElementById("seconds").innerHTML = seconds + " seconds";

        //     // Kiểm tra nếu đã kết thúc thời gian, dừng đồng hồ đếm ngược
        //     if (distance < 0) {
        //         clearInterval(countdown);
        //         document.getElementById("hours").innerHTML = "";
        //         document.getElementById("minutes").innerHTML = "";
        //         document.getElementById("seconds").innerHTML = "EXPIRED";
        //     }
        // }, 1000);

        // // Thiết lập thời gian bắt đầu và thời gian kết thúc
        // var startTime = new Date().getTime();
        // var endTime = startTime + (30 * 1000); // 30 giây

        // // Cập nhật đồng hồ đếm ngược mỗi giây
        // var countdown = setInterval(function() {
        //     // Lấy thời gian hiện tại
        //     var now = new Date().getTime();

        //     // Tính toán khoảng cách thời gian giữa hiện tại và thời gian kết thúc
        //     var distance = endTime - now;

        //     // Tính toán các đơn vị thời gian
        //     var seconds = Math.floor(distance / 1000);

        //     // Hiển thị giá trị vào các phần tử HTML
        //     document.getElementById("hours").innerHTML = "";
        //     document.getElementById("minutes").innerHTML = "";
        //     document.getElementById("seconds").innerHTML = seconds + " seconds";

        //     // Kiểm tra nếu đã kết thúc thời gian, dừng đồng hồ đếm ngược
        //     if (distance < 0) {
        //         clearInterval(countdown);
        //         document.getElementById("hours").innerHTML = "";
        //         document.getElementById("minutes").innerHTML = "";
        //         document.getElementById("seconds").innerHTML = "EXPIRED";
        //     }
        // }, 1000);

        // Thiết lập thời gian bắt đầu và thời gian kết thúc
        var startTime = new Date().getTime();
        var endTime = startTime + (30 * 1000); // 30 giây

        // Cập nhật đồng hồ đếm ngược mỗi giây
        var countdown = setInterval(function() {
            // Lấy thời gian hiện tại
            var now = new Date().getTime();

            // Tính toán khoảng cách thời gian giữa hiện tại và thời gian kết thúc
            var distance = endTime - now;

            // Tính toán các đơn vị thời gian
            var seconds = Math.floor(distance / 1000);

            // Hiển thị giá trị vào các phần tử HTML
            document.getElementById("hours").innerHTML = "";
            document.getElementById("minutes").innerHTML = "";
            document.getElementById("seconds").innerHTML = seconds + " seconds";

            // Kiểm tra nếu đã kết thúc thời gian, dừng đồng hồ đếm ngược và hiển thị bảng
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("hours").innerHTML = "";
                document.getElementById("minutes").innerHTML = "";
                document.getElementById("seconds").innerHTML = "EXPIRED";
                document.getElementById("tableDiv").classList.remove("d-none");
            }
        }, 1000);
    </script>

</head>

<body>

    <div class="container-fluid">

        <div class="d-flex align-items-center">
            <h1 class="mt-4 mb-4">
                <a class="home-link active" data-toggle="tab" href="#tab-panel-4">HOME</a>
            </h1>
            <div class="ml-auto button-container">
                <button class=" mt-4 mr-4 rounded-circle overflow-hidden" style="width: 50px; height: 50px; padding: 0;" onclick="toggleInfoPanel()">
                    <div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center; border-radius: 50%; overflow: hidden;">
                        <img src="../page/assets/images/courses-02.jpg" alt="avatar" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </button>

                <!-- Bảng menu -->
                <div id="infoPanel" class="info-panel mr-5 shadow" style="display: none; width: 350px; height: 550px; border-radius: 10px; background-color: #f1f4f9;">
                    <!-- Your information panel content goes here -->

                    <div>
                        <span>Account</span>

                        <ul class="list-unstyled d-flex flex-column ">

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-dollar-sign ml-2 mr-4"></i> Payment Options</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-globe ml-2 mr-4"></i> Country</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-bell ml-2 mr-4"></i> Notification Settings</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center" style="width: 100%; height: 50px; border-radius: 10px;"> <i class="fa fa-edit ml-2 mr-4"></i> Edit Profile</li>

                        </ul>
                    </div>

                    <div>
                        <span>General</span>

                        <ul class=" list-unstyled d-flex flex-column ">

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center " style="width: 100%; height: 50px; border-radius: 10px"> <i class="fa fa-question ml-2 mr-4"></i> Support</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center " style="width: 100%; height: 50px; border-radius: 10px"> <i class="fa fa-file ml-2 mr-4"></i> Terms of Service</li>

                            <li class="mt-2 p-2 bg-white shadow-sm border d-flex align-items-center " style="width: 100%; height: 50px; border-radius: 10px"> <i class="fa fa-user-plus ml-2 mr-4"></i> Invite Friends</li>

                        </ul>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-danger"> <i class="fa fa-sign-out-alt"></i> Logout</button>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">

            <!-- Phần 1 -->
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 border">
                <ul class="list-unstyled">

                    <!-- Danh sách course -->
                    <li class="mt-4 rounded-lg d-flex align-items-center bg-white border shadow" style="height: 100px; background-color: #f1f4f9;">
                        <div class="d-flex align-items-center flex-grow-1">
                            <!-- Hình ảnh -->
                            <div class="ml-2">
                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 50px; height: 50px; border-radius: 25%;">
                            </div>

                            <!-- Tiêu đề -->
                            <div class="ml-2">
                                <span class="d-block font-weight-bold mb-2">Slack Ltd</span>
                                <span class="text-xs">Paid on: May 4th, 2023</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2">
                                <a href="?module=user&action=game/gameplaypage"><button class="btn btn-success">Play</button></a>
                            </div>
                        </div>
                    </li>

                    <!-- Danh sách course -->
                    <li class="mt-4 rounded-lg d-flex align-items-center bg-white border shadow" style="height: 100px; background-color: #f1f4f9;">
                        <div class="d-flex align-items-center flex-grow-1">
                            <!-- Hình ảnh -->
                            <div class="ml-2">
                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 50px; height: 50px; border-radius: 25%;">
                            </div>

                            <!-- Tiêu đề -->
                            <div class="ml-2">
                                <span class="d-block font-weight-bold mb-2">Slack Ltd</span>
                                <span class="text-xs">Paid on: May 4th, 2023</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2">
                                <a href="?module=user&action=game/gameplaypage"><button class="btn btn-success">Play</button></a>
                            </div>
                        </div>
                    </li>

                    <!-- Danh sách course -->
                    <li class="mt-4 rounded-lg d-flex align-items-center bg-white border shadow" style="height: 100px; background-color: #f1f4f9;">
                        <div class="d-flex align-items-center flex-grow-1">
                            <!-- Hình ảnh -->
                            <div class="ml-2">
                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 50px; height: 50px; border-radius: 25%;">
                            </div>

                            <!-- Tiêu đề -->
                            <div class="ml-2">
                                <span class="d-block font-weight-bold mb-2">Slack Ltd</span>
                                <span class="text-xs">Paid on: May 4th, 2023</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2 text-center">
                                <span class="d-block text-danger">$500.00</span>
                                <button class="btn btn-primary">Buy</button>
                            </div>
                        </div>
                    </li>

                    <!-- Danh sách course -->
                    <li class="mt-4 rounded-lg d-flex align-items-center bg-white border shadow" style="height: 100px; background-color: #f1f4f9;">
                        <div class="d-flex align-items-center flex-grow-1">
                            <!-- Hình ảnh -->
                            <div class="ml-2">
                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 50px; height: 50px; border-radius: 25%;">
                            </div>

                            <!-- Tiêu đề -->
                            <div class="ml-2">
                                <span class="d-block font-weight-bold mb-2">Slack Ltd</span>
                                <span class="text-xs">Paid on: May 4th, 2023</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2 text-center">
                                <span class="d-block text-danger">$500.00</span>
                                <button class="btn btn-primary">Buy</button>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Phần 2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 border">
                <div class="mt-4">
                    <iframe src="https://example.com/game" width="730" height="550"></iframe>
                </div>
            </div>

            <!-- Phần 3 -->
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 border">

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mr-2">Pause</button>
                    <button class="btn btn-primary">Replay</button>
                </div>

                <!-- thời gian đến ngược -->
                <div class="d-flex justify-content-center mt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="countdown">
                                    <div id="hours" class="countdown-item border p-2 rounded-lg"></div>
                                    <div id="minutes" class="countdown-item border p-2 rounded-lg"></div>
                                    <div id="seconds" class="countdown-item border p-2 rounded-lg"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hiện bảng  -->
                <div class="mt-4">

                    <div id="tableDiv" class="d-none">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">English</th>
                                    <th scope="col">Korean</th>
                                    <th scope="col">Answer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hello</td>
                                    <td>안녕하세요</td>
                                    <td><input type="checkbox" class="form-check-input ml-1"></td>
                                </tr>
                                <tr>
                                    <td>Student</td>
                                    <td>학생</td>
                                    <td><input type="checkbox" class="form-check-input ml-1"></td>
                                </tr>
                                <tr>
                                    <td>Apple</td>
                                    <td>사과</td>
                                    <td><input type="checkbox" class="form-check-input ml-1"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>

</html>