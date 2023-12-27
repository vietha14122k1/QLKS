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
    <h1 style="text-align: center;">Danh sách phòng</h1>
    <div class="box-table">
        <form method="post" action="http://localhost/QLKS/Khachhang/timkiem">
            <ul>
                <li class="box_search">

                    <input class="search" type="text" name="makh" value="" placeholder="Nhập thông tin">
                    <input type="submit" name="btn_search" value="search">

                </li>
            </ul>
        </form>
        <div>
            <a href="http://localhost/QLKS/Themkhachhang">
                <ion-icon style="font-size:30px" name="add"></ion-icon>
            </a>
        </div>
        <form class="form" method="post" action="http://localhost/QLKS/Khachhang">
            <table class="container_table" border="1" cellspacing="1" cellpadding="1">
                <tr>
                    <th>STT</th>
                    <th>Số phòng</th>
                    <th>Số tầng</th>
                    <th>Số giường</th>
                    <th>Giới hạn người</th>
                    <th>Giá tiền</th>
                    <th>trạng thái</th>
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
                        <td>' . $row["sophong"] . '</td>
                        <td>' . $row["sotang"] . '</td>
                        <td>' . $row["sogiuong"] . '</td>
                        <td>' . $row["gioihannguoi"] . '</td>
                        <td>' . $row["giatien"] . '</td>
                        <td>' . $row["trangthai"] . '</td>
                        ';
                       if(($row["trangthai"]=="Trống")) echo '<td> <a class=" fucn" href= "http://localhost/QLKS/Dattruoc/themdattruocview/' . $row['sophong'] . '">Đặt phòng</a>
                        </td>';
                        else echo '<td>Đặt phòng</td>';
                    echo ' <td> <a class="update fucn" href= "http://localhost/QLKS/Khachhang/UpdatekhachhangView/' . $row['sophong'] . '" ><ion-icon name="reload-circle-sharp"></ion-icon>
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