<style>
.container {
    position: relative;
    width: 85%;
    margin-left: 10px;
}

.box-table {
    padding: 0 20px;
    margin-top: 50px;
}

.container_table {
    color: black;
    width: 100%;
}

.container_table tr {
    text-align: center;
}

.container_table tr th {
    padding: 5px 10px;
}

.box_search {
    display: flex;
    align-items: center;
    gap: 5px;
}

.btn_search {
    padding: 4px 2px;
    border: none;
    border-radius: 5px;
    background: linear-gradient(45deg, #273958, #5eb9f0);
    color: white;
}
</style>
<div class="container">
    <h1 style="text-align: center;">Quản lý Dịch vụ</h1>
    <div class="box-table">
        <form method="post" action="http://localhost/QLKS/Dichvu/timkiem">
            <ul>
                <li class="box_search">

                    <input class="search" type="text" name="madv" value="" placeholder="Enter ...">
                    <input type="submit" name="btn_search" value="search">

                </li>
            </ul>
        </form>
        <div>
            <a href="http://localhost/QLKS/Themdichvu">
                <ion-icon style="font-size:30px" name="add"></ion-icon>
            </a>
        </div>
        <form class="form" method="post" action="http://localhost/QLKS/Dichvu">
            <table class="container_table" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <th>STT</th>
                    <th>Mã dịch vụ</th>
                    <th>Tên Dịch vụ</th>
                    <th>Số phòng</th>
                    <th>Bảng giá</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                $count = 0;
                while ($row = mysqli_fetch_array($data["kq"])) {
                    $count += 1;
                    echo '
                        <tr>
                        <td>' . $count . '</td>
                        <td>' . $row["madv"] . '</td>
                        <td>' . $row["tendv"] . '</td>
                        <td>' . $row["sophong"] . '</td>
                        <td>' . $row["banggia"] . '</td>';
                    if (isset($_SESSION['username'])&&$_SESSION['username'] == "admin") {
                        echo '<td> <a class=" fucn" onclick="go(' . "'http://localhost/QLKS/Dichvu/delete/" . $row['madv'] . "')" . '"><ion-icon name="trash-sharp"></ion-icon></a>
                        </td>';
                    }
                    echo ' <td> <a class="update fucn" href= "http://localhost/QLKS/Dichvu/UpdatedichvuView/' . $row['madv'] . '" ><ion-icon name="reload-circle-sharp"></ion-icon>
                        </a></td>
                        </tr>';
                }
                ?>

            </table>
        </form>
    </div>
</div>

<script>
function go(link) {
    if (window.confirm('Bạn có chăc muốn xóa?')) {
        window.open(link, '_seft');

    } else {}
}
</script>