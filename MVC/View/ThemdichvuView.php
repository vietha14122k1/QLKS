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
        action="http://localhost/QLKS/Themdichvu/themdichvu">

        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="text-center">Thêm Dịch vụ</h1>

                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="label1" for="usr">Mã Dịch vụ:</label>
                        <input required="true" type="text" class="form-control" name="madv"
                            placeholder="Nhập mã dịch vụ">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Tên Dịch vụ:</label>
                        <input required="true" type="text" class="form-control" name="tendv"
                            placeholder="Nhập tên dịch vụ">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="pwd">Số phòng:</label>
                        <input required="true" type="text" class="form-control" name="sophong"
                            placeholder="Số phòng">
                    </div>
                    <div class="form-group">
                        <label class="label1" for="text">Bảng giá:</label>
                        <input type="text" class="form-control" name="banggia" placeholder="Giá tiền">
                    </div>

                    
                    <button class="btn btn-success" name="btnLuu">Thêm Dịch vụ</button>

                </div>
            </div>
        </div>
    </form>
</body>

</html>