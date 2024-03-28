<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
        .custom-modal-container {
            max-width: 800px;
            /* Điều chỉnh kích thước container cho phù hợp với iframe */
            margin: auto;
            /* Căn giữa container trong iframe */
        }

        /* Điều chỉnh lại kích thước và khoảng cách cho các phần tử để phù hợp */
        .payment-info,
        .account-info {
            max-width: 380px;
            /* Điều chỉnh lại kích thước cho phù hợp */
            margin-right: 10px;
            /* Điều chỉnh khoảng cách */
        }

        /* Điều chỉnh lại kích thước modal cho phù hợp */
        #successModal .modal-dialog {
            margin: 150px auto;
            /* Căn giữa modal và điều chỉnh margin */
        }
    </style>
</head>

<body>
    <div class="custom-modal-container">
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

                    <div class="mt-3 mb-4 border shadow" style="width: 585px; height: 453px; border-radius: 25px;">

                        <!-- Chuyển khoản ngân hàng -->
                        <div class="d-flex justify-content-center mt-3">
                            <div class="d-flex flex-column">

                                <div class="mb-2">
                                    <span class="font-weight-bold">Bank transfer</span>
                                </div>

                                <div class="d-flex mt-2">
                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 235px; height: 63px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block">Account number</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">1234 5678</span>
                                    </div>

                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 235px; height: 63px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block">Account name</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">Nguyen Van A</span>
                                    </div>
                                </div>

                                <div class="d-flex mt-2">
                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 235px; height: 63px; border-radius: 10px; background-color: #f7f7f7">
                                        <span class="d-block text-danger">Content</span>
                                        <span class="ml-5 mr-5 text-danger font-weight-bold">AGFDRE</span>
                                    </div>

                                    <div class="p-2 mr-2 border d-flex flex-column align-items-start" style="width: 235px; height: 63px; border-radius: 10px; background-color: #f7f7f7">
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

                                        <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Account number" style="width: 235px; height: 45px; border-radius: 10px;">

                                        <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Your account name" style="width: 235px; height: 45px; border-radius: 10px;">

                                    </div>
                                    <input type="text" class="p-2 mt-2 mr-2 border d-flex flex-column align-items-start" placeholder="Your email login" style="width: 235px; height: 45px; border-radius: 10px;">


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
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closePage()">Close</button>
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

                </div>
            </div>

        </div>
    </div>

</body>
<script>
    function closePage() {
        try {
            window.close();
        } catch (e) {
            console.log(e);
        }

        // Nếu window.close() không hoạt động, bạn có thể thêm một thông báo hoặc hướng dẫn người dùng đóng trang bằng tay
    }
</script>

</html>