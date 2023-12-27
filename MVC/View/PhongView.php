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
    border-radius: 4px;
    border: 1px solid #333;
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
    <h1 style="text-align: center;">Quản lý phòng</h1>



    <div class="box-table">
        <form method="post" action="http://localhost/QLKS/Phong/timkiem">
            <ul>
                <li class="box_search">

                    <input class="search" type="text" name="key"
                        value="<?php if(isset($data['key'])) echo $data['key']; ?>"
                        placeholder="Nhập thông tin cần tìm kiếm">
                    <input type="submit" name="btn_search" value="search">

                </li>
            </ul>
            <select name="value_search">
                <option
                    <?php  if(!isset($data['value_search'])||(isset($data['value_search']) && $data['value_search']=="all")) echo "selected";?>
                    value="all">Tất cả</option>
                <option <?php  if(isset($data['value_search'])&& $data['value_search']=="Trống") echo "selected";?>
                    value="Trống">Trống</option>
                <option
                    <?php  if(isset($data['value_search'])&& $data['value_search']=="Có đặt trước") echo "selected";?>
                    value="Có đặt trước">Có đặt trước</option>
                <option <?php  if(isset($data['value_search'])&& $data['value_search']=="Đã đặt") echo "selected";?>
                    value="Đã đặt">Đã đặt</option>
            </select>
        </form>
        <div>
            <a href="http://localhost/QLKS/Phong/AddPhongView">
                <ion-icon style="font-size:30px" name="add"></ion-icon>
            </a>
        </div>
        <form class="form" method="post" action="http://localhost/QLKS/Phong">
            <table class="container_table" border=1 cellspacing="1" cellpadding="1">
                <tr>
                    <th>STT</th>
                    <th>Số phòng</th>
                    <th>Loại phòng</th>
                    <th>Số tầng</th>
                    <th>Trạng thái</th>
                    <th></th>
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
                        <td>' . $row["loaiphong"] . '</td>
                        <td>' . $row["sotang"] . '</td>
                        <td>' . $row["trangthai"] . '</td>


                        <td> <a class=" fucn" onclick="change_Status(' . "'http://localhost/QLKS/Phong/fastchange/" . $row['sophong'] . "')" . '">Đổi nhanh</a>
                        </td>';
                    if (isset($_SESSION['username'])&&$_SESSION['username'] == "admin") {
                        echo '<td> <a class=" fucn" onclick="go(' . "'http://localhost/QLKS/Phong/delete/" . $row['sophong'] . "')" . '"><ion-icon name="trash-sharp"></ion-icon></a>
                        </td>';
                    }
                    echo ' <td> <a class="update fucn" href= "http://localhost/QLKS/Phong/UpdatePhongView/' . $row['sophong'] . '" ><ion-icon name="reload-circle-sharp"></ion-icon>
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

function change_Status(link) {
    if (window.confirm('Bạn có chăc muốn đổi trạng thái?')) {
        window.open(link, '_seft');

    } else {}
}
</script>