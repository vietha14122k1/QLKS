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
            Update Phòng
        </h3>
    </div>
    <form autocomplete="off" method="post" action="http://localhost/QLKS/Phong/update" class="form">
        <div class="box_sub_form">
            <div class="sub_form">
                <label class='label' for="name">Số phòng:</label>
                <input type="text" class="input" name="sophong" readonly placeholder=""
                    value="<?php foreach ($data["kq"] as $row) echo $row["sophong"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="name">Loại phòng:</label>
                
                <input type="text" class="input" name="loaiphong" required placeholder=""
                    value="<?php foreach ($data["kq"] as $row) echo $row["loaiphong"]; ?>" />
            </div>
            <div class="sub_form">
                <label class='label' for="desc">Số tầng: </label>
                <input type="text" class="input" name="sotang"
                    value="<?php foreach ($data["kq"] as $row) echo $row["sotang"]; ?>">
            </div>
            <div class="sub_form">
                <label class='label' for="name">Trạng thái:</label>
                <select name="trangthai" id="">
                    <option value="Trống" <?php foreach($data["kq"] as $row) if($row["trangthai"]=="Trống") echo "selected";?>>Trống</option>
                    <option value="Đã đặt" <?php foreach($data["kq"] as $row) if($row["trangthai"]=="Đã đặt") echo "selected";?>>Đã đặt</option>
                    <option value="Có đặt trước" <?php foreach($data["kq"] as $row) if($row["trangthai"]=="Có đặt trước") echo "selected";?>>Có đặt trước</option>
                </select>
            </div>

            <div style="
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 20px 0 0 0;
            ">
                <button onclick="addCourse()" class="button" name="btn_Luu" type="submit">
                    Update phòng
                </button>
            </div>
        </div>


    </form>
</div>