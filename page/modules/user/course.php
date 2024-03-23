<!DOCTYPE html>
<html>

<head>
    <title>Content Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <div class="bg-white p-4">
        <div class="container-fluid bg-white">

            <!-- Thanh tìm kiếm -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-md-6">
                    <form class="form-inline">
                        <div class="input-group w-100">
                            <input class="form-control flex-grow-1" type="search" placeholder="Search for your course..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div>
                <div class="d-flex bg-white mt-4">

                    <ul class="nav nav-tabs mt-1 text-center" style="margin-left: 100px; margin-right: 10px;">

                        <li class="nav-item mt-2 mb-2 rounded-lg mr-4" style="width: 250px; background-color: #B2EBF2;">
                            <a class="nav-link active font-weight-bold nav-link-hover" data-toggle="tab" href="#tab1-panel-0">Basic Course</a>
                        </li>

                        <li class="nav-item mt-2 mb-2 rounded-lg mr-4" style="width: 250px; background-color: #B2EBF2;">
                            <a class="nav-link font-weight-bold nav-link-hover" data-toggle="tab" href="#tab1-panel-1">Advanced Course</a>
                        </li>

                        <li class="nav-item mt-2 mb-2 rounded-lg mr-4" style="width: 250px; background-color: #B2EBF2;">
                            <a class="nav-link font-weight-bold nav-link-hover" data-toggle="tab" href="#tab1-panel-2">Exam Preparation Course</a>
                        </li>

                    </ul>

                </div>

                <div class="tab-content mt-4">
                    <div id="tab1-panel-0" class="tab-pane fade show active">

                        <!-- thông tin -->
                        <div class="bg-white">
                            <h5 class="font-weight-bold ml-4">New Course</h5>

                            <div class="mt-4 mb-5">
                                <ul>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course1</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-03.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course2</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-02.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course3</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                    <div id="tab1-panel-1" class="tab-pane fade">
                        <!-- thông tin -->
                        <div class="bg-white">
                            <h5 class="font-weight-bold ml-4">New Course</h5>

                            <div class="mt-4 mb-5">
                                <ul>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-02.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course1</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course2</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-02.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course3</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="tab1-panel-2" class="tab-pane fade">

                        <!-- thông tin -->
                        <div class="bg-white">
                            <h5 class="font-weight-bold ml-4">New Course</h5>

                            <div class="mt-4 mb-5">
                                <ul>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course1</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-03.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course2</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Danh sách course -->
                                    <li class="p-2 mt-4 rounded-lg flex-grow-1 mr-4 d-flex align-items-center" style="height: 150px; list-style: none; background-color: #f1f4f9;">
                                        <div class="d-flex align-items-center">
                                            <!-- Hình ảnh -->
                                            <div>
                                                <img src="../page/assets/images/courses-05.jpg" alt="{product.name}" style="width: 170px; border-radius: 5%;">
                                            </div>

                                            <!-- Tiêu đề -->
                                            <div class="ml-4 text-center" style="width: 150px;">
                                                <h5 class="font-weight-bold">Course3</h5>
                                            </div>

                                            <!-- Thông tin -->
                                            <div class="text-center" style="width: 950px;">
                                                <span>Information</span>
                                            </div>

                                            <!-- Giá -->
                                            <div class="text-center">
                                                <span>50$</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>