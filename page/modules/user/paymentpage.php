<!DOCTYPE html>
<html>

<head>
    <title>User Client Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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

        <div class="row mt-2">

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
                                            <li class="mt-2 mb-2 text-sm">Code orders</li>
                                        </ul>
                                    </th>
                                    <td class="text-right">
                                        <ul class="list-unstyled">
                                            <li class="mt-2 mb-2">$500.00</li>
                                            <li class="mt-2 mb-2">
                                                AGFDRE
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
                <div class="mt-2 ml-2">
                    <h3> Payment by card</h3>
                </div>

                <div class="d-flex justify-content-center">

                    <div class="mt-3 mb-4 border shadow" style="width: 1000px; height: 500px; border-radius: 25px;">

                        <!-- Chuyển khoản ngân hàng -->
                        <div class="d-flex justify-content-center mt-3">
                            <div class="d-flex flex-column">

                                <div class="mb-2">
                                    <span class="font-weight-bold">Bank transfer</span>
                                </div>

                                <div class="d-flex mt-2">
                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 400px; height: 70px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block">Account number</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">1234 5678</span>
                                    </div>

                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 400px; height: 70px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block">Account name</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">Nguyen Van A</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-2">
                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 400px; height: 70px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block text-danger">Content</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">AGFDRE</span>
                                    </div>

                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 400px; height: 70px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block">Bank</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">KOREA BANK</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Thông tin tài khoản ngân hàng dùng thanh toán -->
                        <div>
                            <div class="d-flex justify-content-center mt-3">
                                <div class="d-flex flex-column">

                                    <div class="mb-2">
                                        <span class="font-weight-bold">Payment bank account</span>
                                    </div>
                                    <div class="d-flex mt-2">

                                        <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Account number" style="width: 400px; height: 50px; border-radius: 10px;">

                                        <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Your account name" style="width: 400px; height: 50px; border-radius: 10px;">
                                      
                                    </div>
                                    <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Your email login" style="width: 400px; height: 50px; border-radius: 10px;">


                                </div>
                            </div>
                        </div>

                        <!-- check -->
                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-success" data-toggle="modal" data-target="#successModal">
                                <i class="fa fa-check"></i> Check
                            </button>
                        </div>

                        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="successModalLabel">Notification</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <i class="fa fa-check"></i> Submitted successfully!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="navigateToUserClient()">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function navigateToUserClient() {
                                window.location.href = "?module=user&action=userClient";
                            }
                        </script>

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