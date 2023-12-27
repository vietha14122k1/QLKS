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
        action="http://localhost/QLKS/Themnhanvien/themnhanvien">

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Thêm nhân viên</h1>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="label1" for="usr">Mã Nhân viên:</label>
                        <input required="true" type="text" class="form-control" name="manv"
                            placeholder="Nhập mã nhân viên">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Tên nhân viên:</label>
                        <input required="true" type="text" class="form-control" name="tennv"
                            placeholder="Nhập tên nhân viên">
                    </div>
                    <div class="form-group" >
                        <label class="label1" for="pwd">Chức vụ:</label>
                        <select name="chucvu">
                            <option value="nhanvien">nhanvien</option>
                            <option value="admin">admin</option>

                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Năm sinh:</label>
                        <input type="date" class="form-control" name="namsinh" required>
                    </div>

                    <div class="form-group">
                        <label class="label1" for="text">SĐT:</label>
                        <input required="true" type="text" class="form-control" name="sdt"
                            placeholder="Nhập số diện thoại">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Giới tính:</label>
                        <input type="radio" name=gioitinh value="Nam" style="height:35px; width:35px; margin-right: 20px;" checked>&nbsp;Nam
                        <input type="radio" name=gioitinh value="Nữ" style="height:35px; width:35px;margin:auto 20px">&nbsp;Nữ
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Địa chỉ:</label>
                        <input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ">
                    </div>
                    <button class="btn btn-success" name="btnLuu">Thêm nhân viên</button>

                </div>
            </div>
        </div>
    </form>
</body>

</html>