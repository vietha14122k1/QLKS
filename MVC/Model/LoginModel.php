<?php
class LoginModel extends connectDB
{
    public function CheckLogin($user, $pass)
    {
        $sql = "Select * From account Where taikhoan='$user' and matkhau='$pass'";
        $data = mysqli_query($this->con, $sql);
        $kq = false;
        if (mysqli_num_rows($data) > 0) {
            $kq = true;
        }
        return $kq;
    }
}