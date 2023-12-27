<style>
.boxcontainer {
    background-image: black;
    width: 85%;
    margin-left: 10px;
}

.select {
    padding: 10px 12px;
    border-radius: 10px;
    border: 1px solid #00000054;
    box-shadow: 0 0 10px black inset;
    transform: translateX(7px);
}

.label {
    width: 20% !important;
    font-size: 18px;
    display: flex;
    font-weight: 600;
    color: rgb(32, 32, 32);
    align-items: center;
}

.input {
    width: 75%;
    padding: 3px;
    border-radius: 10px;
    border: 2px solid rgb(141, 140, 140);
}


.sub_form {
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 15px;
}

.button {
    padding: 15px 50px;
    border: none;
    border-radius: 10px;
    color: white;
    font-weight: 600;
    background: linear-gradient(45deg, #6c6b6b, #5e5758);
}

.box_sub_form {
    width: 100%;
    padding-left: 20px;
}

form {
    position: relative;
    width: 100%;
}
</style>
<div class="boxcontainer">
    <div style="display: flex; justify-content: center; background: transparent">
        <h3 style="
            display: flex;
            justify-content: center;
            font-size: 31px;
            background-image: linear-gradient( 180deg, rgb(89 86 86), #412121, #656570 );
            width: max-content;
            color: transparent;
            background-clip: text;
            -webkit-background-clip: text;
          ">
            Update NHân viên
        </h3>
    </div>
    <form autocomplete="off" method="post" action="http://localhost/QLKS/Nhanvien/update" class="form">
        <div class="box_sub_form">
            <div class="sub_form">
                <label class='label' for="name">Mã Nhân viên:</label>
                <input type="text" class="input" name="manv" readonly placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["manv"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="name">Tên Nhân viên:</label>
                <input type="text" class="input" name="tennv" required placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["tennv"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="desc">Chức vụ: </label>
                    <select name="chucvu">
                            <option value="nhanvien" <?php foreach($data["kq"] as $row)if($row["chucvu"]=="nhanvien") echo "selected";?>>nhanvien</option>
                            <option value="admin" <?php foreach($data["kq"] as $row)if($row["chucvu"]=="admin") echo "selected";?>>admin</option>

                        </select>
            </div>
            <div class="sub_form">
                <label class='label' for="name">năm sinh:</label>
                <input type="text" class="input" name="namsinh" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["namsinh"]; ?>" required />
            </div>
            <div class="sub_form">
                <label class='label' for="name">Số điện thoại: </label>
                <input type="text" class="input" name="sdt" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["sdt"]; ?>" required>
            </div>
            <div class="sub_form">
                <label class='label' for="name">Giới tính: </label>
                    <input type="radio" name=gioitinh value="Nam" style="height:35px; width:35px; margin-right: 20px;" <?php foreach($data["kq"] as $row)if($row["gioitinh"]=="Nam")echo "checked";?>>&nbsp;Nam
                        <input type="radio" name=gioitinh value="Nữ" style="height:35px; width:35px;margin:auto 20px" <?php foreach($data["kq"] as $row)if($row["gioitinh"]=="Nữ")echo "checked";?>>&nbsp;Nữ
            </div>
            <div class="sub_form">
                <label class='label' for="name">Địa chỉ: </label>
                <input type="text" class="input" name="diachi" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["diachi"]; ?>" required>
            </div>
            <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 20px 0 0 0;
              ">
                <button onclick="addCourse()" class="button" name="btn_Luu" type="submit">
                    Update
                </button>
            </div>
        </div>


    </form>
</div>