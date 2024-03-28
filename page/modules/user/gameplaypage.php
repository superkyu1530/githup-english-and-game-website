<?php
if (!defined('_CODE')) {
  die('Access denied...');
}

$id = getSession('id');

$userQuery = oneRaw("SELECT *FROM users WHERE id = '$id'");

if (!empty($userQuery)) {
    $name = $userQuery['fullname'];
}


if(isPost()){
        $buttonValue = $_POST['submitBtn'];
        if (!empty($buttonValue)) {
            
            switch ($buttonValue) {
                case 'voca_lever_1_1500_elimentary':
                    $vocaQuery = getRaw(" SELECT * FROM voca_lever_1_1500_elimentary LIMIT 20 ");

                    break;
                case 'voca_lever_2_1200_middle':
                    $vocaQuery = getRaw(" SELECT * FROM voca_lever_2_1200_middle LIMIT 20 ");

                    break;
                case 'voca_lever_3_2850_high':
                    $vocaQuery = getRaw(" SELECT * FROM voca_lever_3_2850_high LIMIT 20 ");

                    break;
            }

        }
    }
?>

<!DOCTYPE html>
<html>

<div class="d-flex align-items-center border" style="width: 100%; height: 50px">
<span class="ml-5 font-weight-bold">English And Game</span>
        </div>

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
            width: 10px;
            /* Chiều rộng của thanh cuộn */
            height: 6px;
            /* Chiều cao của thanh cuộn */
        }

        ::-webkit-scrollbar-track {
            background-color: white;
            /* Màu nền của thanh cuộn */
        }

        ::-webkit-scrollbar-thumb {
            background-color: #f5f5f5;
            /* Màu của thanh cuộn */
            border-radius: 4px;
            /* Độ cong viền của thanh cuộn */
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #888;
            /* Màu của thanh cuộn khi di chuột qua */
        }
    </style>

<style>
        .table-container {
            width: 100%; /* Hoặc một chiều rộng cố định */
            height: 175px; /* Chiều cao cố định cho container */
            overflow-y: auto; /* Cho phép cuộn dọc */
            border: 1px solid #ccc; /* Thêm viền cho container */
            margin-top: 20px;
        }
        table {
            width: 100%; /* Đảm bảo bảng mở rộng đầy đủ chiều rộng của container */
            border-collapse: collapse; /* Loại bỏ khoảng cách giữa các ô */
        }
        th, td {
            text-align: left; /* Căn chỉnh văn bản */
            padding: 8px; /* Thêm đệm */
            border: 1px solid #ddd; /* Thêm viền cho các ô */
        }
        thead tr {
            background-color: #f2f2f2; /* Màu nền cho tiêu đề bảng */
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

        // Thiết lập thời gian bắt đầu và thời gian kết thúc
        var startTime = new Date().getTime();
        var endTime = startTime + (5 * 60 * 1000); // 5 phút = 5 * 60 * 1000 milliseconds

        // Cập nhật đồng hồ đếm ngược mỗi giây
        var countdown = setInterval(function() {
            // Lấy thời gian hiện tại
            var now = new Date().getTime();

            // Tính toán khoảng cách thời gian giữa hiện tại và thời gian kết thúc
            var distance = endTime - now;

            // Tính toán các đơn vị thời gian
            var minutes = Math.floor(distance / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Hiển thị giá trị vào các phần tử HTML
            document.getElementById("hours").innerHTML = ""; // Bỏ hiển thị giờ
            document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, "0"); // Hiển thị phút
            document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, "0"); // Hiển thị giây

            // Kiểm tra nếu đã kết thúc thời gian, dừng đồng hồ đếm ngược và hiển thị bảng
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("hours").innerHTML = "";
                document.getElementById("minutes").innerHTML = "00";
                document.getElementById("seconds").innerHTML = "00";
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

        <!-- Tên trang -->
        <!-- <div class="d-flex align-items-center border" style="width: 100%; height: 50px">
            <span class="ml-5 font-weight-bold">LOGO</span>
        </div> -->

        <!-- Phần trên -->
        <div class="d-flex align-items-center" style="width: 100%; height: 175px;">

            <div style="width: 100%;">

                <div class="row">

                    <!-- Phần 1 -->
                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 border" style="height: 175px; overflow-y: auto;">
                        <div class="">
                            <form action="" method="post">
                            <ul class="list-unstyled custom-scrollbar" id="listItems">
                            <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="voca_lever_1_1500_elimentary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>1. 초등학교 영어</span>
                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="voca_lever_2_1200_middle">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>2. 중학교 영어</span>
                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="voca_lever_3_2850_high">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>3. 고등학교 영어</span>
                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;">
                                    <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="ClickMe">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>4. 레벨별 영어</span>
                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;">
                                <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="ClickMe">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>5. 레벨별 영어</span>

                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;" >
                                <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="ClickMe">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>6. 레벨별 영어</span>

                                </li>
                                <li class="mt-2 shadow-sm p-2 rounded-lg" style="background-color: #f5f5f5;" >
                                <button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtn" value="ClickMe">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>7. 레벨별 영어</span>

                                </li>
                            </ul>
                            </form>
                        </div>
                    </div>

                    <!-- Phần 2 -->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 table-container" id="content" style="height: 175px;">
    <table>
        <thead>
            <tr>
                <th>숫자 순서</th>
                <th>English</th>
                <th>한국</th>            
            </tr>
        </thead>
        <tbody>
            <?php
           // if (isset($_POST['submitBtnVoca']) && ($_POST['submitBtnVoca']== true)):
          // if($_POST['submitBtnVoca']== true):
            if(!empty($vocaQuery)):
                $count = 0;
                foreach($vocaQuery as $item):
                    $count++; 
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $item['english'] ?></td>
                <td><?php echo $item['한국'] ?></td>
            </tr>
            <?php
                endforeach;
            endif;
      //  endif;
   // endif;
            ?>
            <form action="" method="post">
            <tr><button class="btn btn-outline-secondary btn-sm" type="submit" name="submitBtnVoca" value="true">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <span>도전</span></tr>
                                    </form>
        </tbody> 

    </table>

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
                    <div class="col-4 col-sm-4 col-md-4 col-lg-4 border" style="height: 175px;">

                        <div class="mt-2 ">

                            <div class="border mb-2 p-2" style="height: 80px; background-color: #f5f5f5;">
                                <span class="font-weight-bold">방문자 ID: <?php echo $id ?></span>
                                <span class="d-flex justify-content font-weight-bold">이름: <?php echo $name ?></span>
                               <a href="?module=auth&action=logout"><span class="d-flex justify-content font-weight-bold">Logout</span></a>

                            </div>

                            <div class="row">

                                <!-- Nút điều khiển -->
                                <div class="col-4">
                                    <div class="border p-2" style="width: 170px; height: 55px;">

                                        <div class="d-flex justify-content-center">
                                            <div>
                                                <button class="btn btn-primary mr-2" style="display: block;">Pause</button>
                                            </div>
                                            <div>
                                                <button class="btn btn-primary" onclick="replayCountdown()" style="display: block;">Replay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- thời gian đến ngược -->
                                <div class="col-8">
                                    <div class="border p-2" style="width: 100%; height: 55px;">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="countdown d-flex justify-content-between" style="height: 35px;">
                                                            <div id="hours" class="countdown-item p-2 rounded-lg"></div>
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
            </div>
        </div>

        <!-- Phần content -->

        <div class="row">

            <!-- Phần 1 - Cột 1 -->
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 border p-2">
                <div class="custom-scrollbar p-2" style="width: 100%; height: 510px; overflow-y: scroll;">
                    <ul class="list-unstyled">

                        <!-- Danh sách course -->
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 px-2">
                                <span>1. Bricks Breaker</span>
                                <button class="btn btn-sm ml-auto game-button" data-game-url="..\Web Test Game\Block Puzzle\Block Puzzle.html"><i class="fas fa-lock-open"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>2. Line Coler</span>
                                <button class="btn btn-sm ml-auto game-button" data-game-url="..\Web Test Game\Line Coler\Line Coler.html"><i class="fas fa-lock-open"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>3. Mathching Gmae</span>
                                <button class="btn btn-sm ml-auto game-button" data-game-url="?module=user&action=paymentpage"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>4. Smashy Draw</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>5. Fill The Cups</span>
                                <button class="btn btn-sm ml-auto game-button" data-game-url="..\Web Test Game\Fill The Cups\fillthecups.html"><i class="fas fa-lock-open"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>6. Word Blocks</span>
                                <button class="btn btn-sm ml-auto game-button" data-game-url="..\Web Test Game\Word Blocks\Word Blocks.html"><i class="fas fa-lock-open"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>7. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>8. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>9. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>10. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>11. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>12. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>13. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>14. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>15. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>
                        <li class="mt-2 mb-2 rounded-lg d-flex align-items-center border shadow-sm" style="height: 50px; background-color: #f5f5f5;">
                            <div class="d-flex align-items-center flex-grow-1 p-2">
                                <span>16. 게임의 이름</span>
                                <button class="btn btn-sm ml-auto"><i class="fas fa-lock"></i></button>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

            <!-- Phần 2 - Cột 2 -->
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 border">
                <div class="mt-4" id="gameContainer">
                    <iframe id="gameFrame" width="880" height="670" style="display:none;"></iframe>
                </div>
            </div>

            <!-- Phần 3 - Cột 3 -->
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 border">

            <table>
            <thead>
            <tr>
                <th>숫자 순서</th>
                <th>English</th>
                <th>한국</th>            
            </tr>
        </thead>
        <tbody>
            <?php
            if(!empty($renderQuery)):
                $count = 0;
                foreach($renderQuery as $item):
                    $count++; 
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $item['english'] ?>                                            <div class="form-check d-flex align-items-center ml-auto">
                                                <input class="form-check-input" type="checkbox" id="myCheckbox">
                                            </div></td>
                <td><?php echo $item['한국'] ?>                                            <div class="form-check d-flex align-items-center ml-auto">
                                                <input class="form-check-input" type="checkbox" id="myCheckbox">
                                            </div></td>
            </tr>
            <?php
                endforeach;
            endif;
            ?>
        </tbody> 
    </table>
    <div>
                                                <button class="btn btn-primary mr-2" style="display: block;">제출하다</button>
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