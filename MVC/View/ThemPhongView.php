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
        action="http://localhost/QLKS/Phong/AddPhong">

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Thêm Phòng</h1>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="label1" for="usr">Số phòng:</label>
                        <input required="true" type="text" class="form-control" name="sophong"
                            placeholder="Nhập sô phòng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Loại phòng:</label>
                        <input required="true" type="text" class="form-control" name="loaiphong"
                            placeholder="Nhập loại phòng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="pwd">Số tầng:</label>
                        <input required="true" type="text" class="form-control" name="sotang"
                            placeholder="Nhập số tầng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Trạng thái:</label>
                        <select name="trangthai">
                            <option value="Trống">Trống</option>
                            <option value="Đã đặt">Đã đặt</option>
                            <option value="Có đặt trước">Có đặt trước</option>
                        </select>
                    </div>

                    
                    <button class="btn btn-success" name="btnLuu">Thêm Phòng</button>

                </div>
            </div>
        </div>
    </form>
</body>

</html>