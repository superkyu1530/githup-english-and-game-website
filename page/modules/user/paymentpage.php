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

        <div class="d-flex align-items-center">
            <h1 class="mt-4 mb-4">
                <a href="?module=user&action=userClient">HOME</a>
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
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                <div class="mt-2">
                    <h3>Awaiting payment</h3>

                    <div class="p-2 mt-4 rounded-lg d-flex align-items-center bg-white border shadow" style="height: 120px; background-color: #f1f4f9;">
                        <div class="d-flex align-items-center flex-grow-1">
                            <!-- Hình ảnh -->
                            <div>
                                <img src="../page/assets/images/courses-03.jpg" alt="{product.name}" style="width: 75px; height: 75px; border-radius: 25%;">
                            </div>

                            <!-- Tiêu đề -->
                            <div class="ml-2">
                                <span class="d-block font-weight-bold mb-2">Slack Ltd</span>
                                <span class="text-xs">Paid on: May, 4th 2023</span>
                            </div>

                        </div>
                    </div>

                    <div class="table-responsive mt-4">
                        <table class="table">
                            <tbody>
                                <tr style=" background-color: #f1f4f9;">
                                    <th scope="row">
                                        ScreenStudio App
                                    </th>
                                    <td class="text-right">
                                        $500.00
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-left">
                                        <ul class="list-unstyled">
                                            <li class="mt-2 mb-2">Subtotal</li>
                                            <li class="mt-2 mb-2 text-sm">Add promotional code</li>
                                        </ul>
                                    </th>
                                    <td class="text-right">
                                        <ul class="list-unstyled">
                                            <li class="mt-2 mb-2">$500.00</li>
                                            <li class="mt-2 mb-2">

                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr style=" background-color: #f1f4f9;">
                                    <th scope="row">
                                        Total amount due today
                                    </th>
                                    <td class="text-right">
                                        $500.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Phần 2 -->
            <div class="col-9 col-sm-9 col-md-9 col-lg-9">
                <div class="mt-2 ml-5">
                    <h3> Payment by card</h3>
                </div>

                <div class="d-flex justify-content-center">

                    <div class="mt-3 mb-4 border shadow" style="width: 800px; height: 550px; border-radius: 25px;">

                        <!-- email -->
                        <div class="d-flex justify-content-center mt-4">
                            <div class="p-2 border d-flex align-items-center" style="width: 400px; height: 50px; border-radius: 10px; background-color: #f7f7f7">
                                <span>
                                    <strong>Email</strong>
                                </span>
                                <span class="ml-5 mr-5">examle@gmail.com</span>
                            </div>
                        </div>

                        <!-- Thông tin thẻ -->
                        <div class="d-flex justify-content-center mt-4">
                            <div class="d-flex flex-column">

                                <div class="mb-2">
                                    <span>Card information</span>
                                </div>

                                <div>
                                    <div>
                                        <div>
                                            <input type="text" class="p-2 border d-flex justify-content-between" placeholder="1234 1234 1234 1234" style="width: 400px; height: 50px; border-radius: 10px 10px 0 0;" id="numberInput" maxlength="19">
                                            <script>
                                                var numberInput = document.getElementById('numberInput');

                                                numberInput.addEventListener('input', function(event) {
                                                    var inputValue = event.target.value;
                                                    var numericValue = inputValue.replace(/\D/g, '');
                                                    var formattedValue = formatNumber(numericValue);
                                                    event.target.value = formattedValue;
                                                });

                                                function formatNumber(value) {
                                                    var formattedValue = '';
                                                    for (var i = 0; i < value.length; i++) {
                                                        if (i > 0 && i % 4 === 0) {
                                                            formattedValue += ' ';
                                                        }
                                                        formattedValue += value.charAt(i);
                                                    }
                                                    return formattedValue;
                                                }
                                            </script>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <input type="text" class="p-2 border d-flex align-items-center" placeholder="MM/YY" style="width: 200px; height: 50px; border-radius: 0 0 0 10px;"></input>
                                            <input type="text" class="p-2 border d-flex align-items-center" placeholder="CVC" style="width: 200px; height: 50px; border-radius: 0 0 10px 0;"></input>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Tên chủ thẻ -->
                        <div class="d-flex justify-content-center mt-3">
                            <div class="d-flex flex-column">

                                <div class="mb-2">
                                    <span>Account name</span>
                                </div>

                                <input type="text" class="p-2 border d-flex align-items-center" placeholder="First and last name" style="width: 400px; height: 50px; border-radius: 10px;"></input>
                            </div>
                        </div>

                        <!-- Quốc gia hoặc khu vực -->
                        <div>
                            <div class="d-flex justify-content-center mt-4">
                                <div class="d-flex flex-column">
                                    <div class="mb-2">
                                        <span>Country or region</span>
                                    </div>

                                    <select id="countrySelect" class="p-2 border d-flex align-items-center form-select" style="width: 400px; height: 50px; border-radius: 10px;">
                                        <option selected disabled>Loading countries...</option>
                                    </select>
                                </div>
                            </div>
                            <script>
                                var countrySelect = document.getElementById('countrySelect');

                                // Gửi yêu cầu GET đến API để lấy danh sách quốc gia
                                fetch('https://restcountries.com/v3.1/all')
                                    .then(response => {
                                        if (!response.ok) {
                                            throw new Error('Network response was not OK');
                                        }
                                        return response.json();
                                    })
                                    .then(data => {
                                        var countries = Object.values(data);

                                        // Sắp xếp danh sách quốc gia theo thứ tự bảng chữ cái
                                        countries.sort((a, b) => a.name.common.localeCompare(b.name.common));

                                        // Xóa các tùy chọn hiện tại trong kiểm chọn
                                        countrySelect.innerHTML = '';

                                        // Tạo và thêm các tùy chọn đã được sắp xếp vào kiểm chọn
                                        countries.forEach(function(country) {
                                            var option = document.createElement('option');
                                            option.value = country.name.common;
                                            option.textContent = country.name.common;
                                            countrySelect.appendChild(option);
                                        });
                                    })
                                    .catch(error => {
                                        console.log('Error:', error);
                                    });
                            </script>
                        </div>
                        <!-- check -->
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-success"> <i class="fa fa-check"></i> Check</button>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div id="tab-panel-5" class="tab-pane fade show active">
                <?php include 'userClient.php'; ?>
            </div>

</body>

</html>