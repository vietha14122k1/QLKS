<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
    .label1 {
        width: 25%;
        font-weight: 500;
        color: black;
        font-size: 25px;
    }

    .form-group {
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .form-group input,
    .form-group select {
        width: 75%;
        padding: 10px 20px;
        border: 2px solid #252021ab;
        border-radius: 10px;
        box-shadow: 0 0 5px black inset;
        font-size: 25px;
    }

    .form-group input:focus {
        border: 2px solid #000000b3;
    }

    .btn-success {
        padding: 20px 100px;
        font-weight: 600;
        color: white;
        background: linear-gradient(180deg, #35223eb8, #03bfb6);
        border: none;
        margin: 0 auto;
        display: block;
    }

    .panel-heading {
        position: relative;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    </style>
    <form method="post" style="width: 85%; margin-left: 10px;" autocomplete="off"
        action="http://localhost/QLKS/Themkhachhang/themkhachhang">

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Thêm khách hàng</h1>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="label1" for="usr">Mã khách hàng:</label>
                        <input required="true" type="text" class="form-control" name="makh" readonly
                            placeholder="Auto">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Tên khách hàng:</label>
                        <input required="true" type="text" class="form-control" name="tenkh"
                            placeholder="Nhập tên khách hàng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="pwd">Ngày đặt:</label>
                        <input required="true" type="date" class="form-control" name="ngaydat"
                            >
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Ngày trả:</label>
                        <input type="date" class="form-control" name="ngaytra" ">
                    </div>

                    <div class="form-group">
                        <label class="label1" for="text">Số phòng:</label>
                        <input required="true" type="text" class="form-control" name="sophong"
                            placeholder="Số phòng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">CMND:</label>
                        <input type="text" class="form-control" name="cmnd" placeholder="Số CMND/CCCD">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diachi" placeholder="Địa chỉ">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">SĐT:</label>
                        <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại">
                    </div>
                    <button class="btn btn-success" name="btnLuu">Thêm Khách hàng</button>

                </div>
            </div>
        </div>
    </form>
</body>

</html>