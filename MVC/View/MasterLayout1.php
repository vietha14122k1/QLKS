<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap');

    * {
        padding: 0;
        margin: 0;
        font-family: 'Montserrat', sans-serif;
        box-sizing: border-box;
        user-select: none;
    }

    body {
        display: flex;
    }

    .nav_menu {
        position: fixed;
        display: flex;
        background-color: white;
        box-shadow: 0 0 5px black;
        left: 0;
        height: 100vh;
        width: 230px;
    }

    .nav_sub {
        display: flex;

    }

    ul,
    a {
        text-decoration: none;
        list-style: none;
        cursor: pointer;
        color: black;
    }

    .menu2-ul li {
        background: #313131;
        padding: 10px 30px;
        margin-left: 10px;
        display: block;
        margin-top: 10px;
        box-shadow: 0 0 3px black;
    }

    .menu2-ul li a,
    .menu_admin a {
        display: flex;
        color: white;
        gap: 5px;
        font-weight: 600;
    }

    .menu_admin {
        padding: 10px;
        background: #6eff00;
        display: flex;
        align-items: center;
        align-content: center;
        justify-content: center;
    }
    </style>

    <div style="position: relative; width: 15%; z-index: 999;">
        <div class="nav_menu">

            <nav class="nav_sub">
                <div class="menu2">
                    <ul class="menu_admin">
                        <li>
                            <a href="http://localhost/QLKS/Profile">
                                <p style='width:100px; display:flex; align-items:center; gap:10px'>
                                    <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; else echo "Bạn chưa đăng nhập"?>
                                </p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Login">
                                <ion-icon style="display: flex;
                    align-items: center;" name="arrow-forward-circle-sharp"></ion-icon>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu2-ul">
                        <li>
                            <a href="http://localhost/QLKS/Home">
                                <ion-icon name="home-sharp"></ion-icon>
                                <p>Trang chủ</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Dattruoc">
                                <ion-icon name="bed-sharp"></ion-icon>
                                <p>Đặt trước</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Phong">
                                <ion-icon name="bed-sharp"></ion-icon>
                                <p>QL phòng</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Dichvu">
                                <ion-icon name="fast-food-sharp"></ion-icon>
                                <p>Dịch vụ</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Nhanvien">
                                <ion-icon name="man-sharp"></ion-icon>
                                <p>Nhân viên</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Khachhang">
                                <ion-icon name="walk-sharp"></ion-icon>
                                <p>Khách hàng</p>
                            </a>
                        </li>
                        <li>
                            <a href="http://localhost/QLKS/Loaiphong">
                                <ion-icon name="walk-sharp"></ion-icon>
                                <p>Loại phòng</p>
                            </a>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>
    <?php
    require_once "./MVC/View/" . $data["page"] . ".php";
    ?>



</body>

</html>