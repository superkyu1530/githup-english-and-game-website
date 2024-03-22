<!DOCTYPE html>
<html>

<head>
    <title>PHP Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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

        <h1 class="mt-4 mb-4">
            <a class="home-link active" data-toggle="tab" href="#tab-panel-0">HOME</a>
        </h1>

        <div class="d-flex justify-content-center align-items-center rounded mt-8" style="background-color: #389bf0;">

            <ul class="nav nav-tabs w-100 mt-1 text-center" style="margin-left: 100px; margin-right: 100px;">

                <!-- <li class="nav-item">
          <a class="home-link active" data-toggle="tab" href="#tab-panel-0"></a>
        </li> -->

                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-1">Course</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-2">Exercise</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-3">Entertaining Game</a>
                </li>
                <li class="nav-item w-25 mt-2 mb-2">
                    <a class="nav-link text-light font-weight-bold nav-link-hover" data-toggle="tab" href="#tab-panel-4">Learning Support</a>
                </li>

            </ul>
        </div>

        <div class="tab-content mt-4">

            <div id="tab-panel-0" class="tab-pane fade show active">
                <?php include 'userpage.php'; ?>
            </div>

            <div id="tab-panel-1" class="tab-pane fade">
                <?php include 'course.php'; ?>
            </div>

            <div id="tab-panel-2" class="tab-pane fade">
                <?php include 'exercise.php'; ?>

            </div>

            <div id="tab-panel-3" class="tab-pane fade">
                <?php include 'entertaininggame.php'; ?>

            </div>

            <div id="tab-panel-4" class="tab-pane fade">
                <?php include 'learningsuppost.php'; ?>

            </div>

        </div>
    </div>

</body>

</html>