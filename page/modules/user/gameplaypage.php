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

        /* Tùy chỉnh thanh cuộn */
        ::-webkit-scrollbar {
            width: 6px;
            /* Chiều rộng của thanh cuộn */
            height: 6px;
            /* Chiều cao của thanh cuộn */
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            /* Màu nền của thanh cuộn */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #888;
            /* Màu của thanh cuộn */
            border-radius: 4px;
            /* Độ cong viền của thanh cuộn */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
            /* Màu của thanh cuộn khi di chuột qua */
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

        function replayCountdown() {
            // Đặt giá trị ban đầu cho các đối tượng đếm ngược
            var hoursElement = document.getElementById("hours");
            var minutesElement = document.getElementById("minutes");
            var secondsElement = document.getElementById("seconds");

            hoursElement.innerHTML = "00";
            minutesElement.innerHTML = "00";
            secondsElement.innerHTML = "00";

            // Bắt đầu đếm ngược từ đầu
            startCountdown();
        }
    </script>

</head>

<body>

    <div class="container-fluid">

        <div class="d-flex align-items-center" style="width: 100%; height: 180px;">

            <div class="container-fluid">

                <div class="row">

                    <!-- Phần 1 -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 border" style="height: 130px; overflow-y: auto;">
                        <div>
                            <ul class="list-unstyled custom-scrollbar" id="listItems">
                                <li class="mt-2" data-content="Nội dung 1">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 1
                                </li>
                                <li class="mt-2" data-content="Nội dung 2">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 2
                                </li>
                                <li class="mt-2" data-content="Nội dung 3">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 3
                                </li>
                                <li class="mt-2" data-content="Nội dung 4">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 4
                                </li>
                                <li class="mt-2" data-content="Nội dung 5">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 5
                                </li>
                                <li class="mt-2" data-content="Nội dung 6">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 6
                                </li>
                                <li class="mt-2" data-content="Nội dung 7">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    list 7
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Phần 2 -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 border" id="content">
                        <div class="mt-2">
                            <div id="defaultContent">chào</div>
                        </div>

                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $("#listItems li").click(function() {
                                var selectedItem = $(this).data("content");
                                $("#content").empty(); // Xoá các phần tử con của phần 2
                                $("#content").append("<div>" + selectedItem + "</div>"); // Thêm nội dung liên quan vào phần 2
                            });
                        });
                    </script>

                    <!-- Phần 3 -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 border">
                        <div class="mt-2 ">
                            <div class="border mb-2 p-2">
                                ID
                            </div>

                            <div class="border p-2">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary mr-2">Pause</button>
                                    <button class="btn btn-primary" onclick="replayCountdown()">Replay</button>
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
                            </div>
                        </div>

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
                                <span class="d-block font-weight-bold mb-2">Block Puzzle</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2">
                                <button class="btn btn-success game-button" data-game-url="..\Web Test Game\Block Puzzle\Block Puzzle.html">Play</button>
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
                                <span class="d-block font-weight-bold mb-2">Line Coler</span>
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2">
                                <button class="btn btn-success game-button" data-game-url="..\Web Test Game\Line Coler\Line Coler.html">Play</button>
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
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2 text-center">
                                <span class="d-block text-danger">$500.00</span>
                                <a href="?module=user&action=paymentpage"><button class="btn btn-primary">Buy</button></a>
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
                            </div>

                            <!-- Giá -->
                            <div class="ml-auto mr-2 text-center">
                                <span class="d-block text-danger">$500.00</span>
                                <a href="?module=user&action=paymentpage"><button class="btn btn-primary">Buy</button></a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>

            <!-- Phần 2 -->
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 border">
                <div class="mt-4" id="gameContainer">
                    <iframe id="gameFrame" width="970" height="670" style="display:none;"></iframe>
                </div>
            </div>

            <!-- Phần 3 -->
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 border">

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary mr-2">Pause</button>
                    <button class="btn btn-primary" onclick="replayCountdown()">Replay</button>
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

    <script>
        $(document).ready(function() {
            $(".game-button").click(function() {
                var gameUrl = $(this).data("game-url"); // Lấy URL từ attribute của button
                $("#gameFrame").attr("src", gameUrl); // Cập nhật src của iframe
                $("#gameFrame").show(); // Hiển thị iframe nếu nó đang ẩn
            });
        });
    </script>

</body>

</html>