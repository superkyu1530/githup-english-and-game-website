<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <style>
    .custom-border {
      position: relative;
      border: 10px solid #ef47f2;
      height: 100vh;
      width: 100%;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .custom-border1 {
      position: absolute;
      top: 1px;
      left: 1px;
      right: 1px;
      bottom: 1px;
      border: 10px solid #e49be3;
      box-sizing: border-box;
    }

    .box1 {
      border-width: 10px 10px 0 10px;
      border-style: solid;
      border-color: #2e58b1;
      box-sizing: border-box;
    }

    .box2 {
      border-top: 10px solid #2e58b1;
      box-sizing: border-box;
    }

    .box3 {
      border-width: 0 10px 10px 10px;
      border-style: solid;
      border-color: #2e58b1;
      box-sizing: border-box;
    }

    .box4 {
      border-top: 10px solid #2e58b1;
      box-sizing: border-box;
    }
  </style>

</head>

<body>

  <div class="container-fluid bg-white" style="padding: 0; margin:0">

    <div class="custom-border">
      <div class="custom-border1">

        <div class="bg-dark" style="width:100%; height:100%;">

          <div class=" d-flex justify-content-center ">

            <!-- Bảng thông tin game -->
            <div class="mt-4">

              <div class=" row box1" style="width: 650px; height: 200px;">
                <div class="col mt-2 ml-2" style="background: #2d2d83;">
                  <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                    <span class="font-weight-bold" style="font-size: 100px; color: #eb1a23;"> 암 </span>
                    <span class="font-weight-bold" style="font-size: 100px; color: #f87f2a;"> 기 </span>
                    <span class="font-weight-bold" style="font-size: 100px; color: #fdf004;"> 해 </span>
                    <span class="ml-5 font-weight-bold" style="font-size: 100px; color: #2bac56;"> 보 </span>
                    <span class="font-weight-bold" style="font-size: 100px; color: #03a0e7;"> 카 </span>
                    <span class="font-weight-bold" style="font-size: 100px; color: white;">?</span>
                  </div>
                </div>
              </div>

              <div class="row" style=" width:650px; height:200px;">

                <div class="box2 col">
                  <div class=" d-flex justify-content-center align-items-center" style="height: 100%;">
                    <!-- nội dung -->
                  </div>
                </div>

                <div class="box3 col" style=" background: #2d2d83;">
                  <div class="d-flex justify-content-center align-items-center" style="height: 100%; flex-direction: column;">
                    <span class="font-weight-bold" style="font-size: 25px; color: yellow;">로그인</span>
                    <a href="?module=auth&action=login"> <span class="font-weight-bold" style="font-size: 25px; color: yellow;">Admin</span></a>
                    <a href="?module=user&action=gameplaypage"> <span class="font-weight-bold" style="font-size: 25px; color: yellow;">User</span></a>
                  </div>
                </div>

                <div class="box4 col">
                  <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                    <!-- nội dung -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Ảnh game -->
          <div class="d-flex justify-content-center align-items-center mb-4">
            <div>
              <img src="../page/assets/images/game.png" alt="{product.name}" style="width: 1400px; max-height: 290px;">
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>

</body>

</html>