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
            Update Khách hàng
        </h3>
    </div>
    <form autocomplete="off" method="post" action="http://localhost/QLKS/Khachhang/update" class="form">
        <div class="box_sub_form">
            <div class="sub_form">
                <label class='label' for="name">Mã Khách hàng:</label>
                <input type="text" class="input" name="makh" readonly placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["makh"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="name">Tên Khách hàng:</label>
                <input type="text" class="input" name="tenkh" required placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["tenkh"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="desc">ngày đặt: </label>
                <input type="date" class="input" name="ngaydat"
                    value="<?php foreach ($data["kq"] as $row) echo $row["ngaydat"]; ?>">
            </div>
            <div class="sub_form">
                <label class='label' for="name">Ngày trả:</label>
                <input type="date" class="input" name="ngaytra" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["ngaytra"]; ?>" required />
            </div>
            <div class="sub_form">
                <label class='label' for="name">Số phòng: </label>
                <input type="text" class="input" name="sophong" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["sophong"]; ?>" required>
            </div>
            <div class="sub_form">
                <label class='label' for="name">cmnd: </label>
                <input type="text" class="input" name="cmnd" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["cmnd"]; ?>" required>
            </div>
            <div class="sub_form">
                <label class='label' for="name">Địa chỉ: </label>
                <input type="text" class="input" name="diachi" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["diachi"]; ?>" required>
            </div>
            <div class="sub_form">
                <label class='label' for="name">sdt: </label>
                <input type="text" class="input" name="sdt" placeholder="Enter your name"
                    value="<?php foreach ($data["kq"] as $row) echo $row["sdt"]; ?>" required>
            </div>
            <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 20px 0 0 0;
              ">
                <button onclick="addCourse()" class="button" name="btn_Luu" type="submit">
                    Update khách hàng
                </button>
            </div>
        </div>


    </form>
</div>