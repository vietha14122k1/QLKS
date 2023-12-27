<?php
$this->khachhang = $this->model("KhachhangModel");
class KhachhangModel extends connectDB
{

    public function KhachhangAll()
    {
        $sql="select * from khachhang";
        return mysqli_query($this->con, $sql);
    }
    public function getKhachhang($makh)
    {
        $sql = "Select * From khachhang where makh='$makh'";
        return mysqli_query($this->con, $sql);
    }
    public function Updatekhachhang($makh, $tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql = "update khachhang set tenkh='$tenkh', ngaydat='$ngaydat', ngaytra='$ngaytra', sophong='$sophong', cmnd='$cmnd', diachi='$diachi', sdt='$sdt' where makh='$makh'";
        return mysqli_query($this->con, $sql);
    }

    public function themkhachhang( $tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql = "INSERT INTO `khachhang`( `tenkh`,`ngaydat`, `ngaytra`, `sophong`, `cmnd`, `diachi`,`sdt`) VALUES ('$tenkh','$ngaydat','$ngaytra','$sophong','$cmnd','$diachi','$sdt')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }

  
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From khachhang where makh like '%$tg%' or tenkh like '%$tg%' or diachi like '%$tg%' ";
        return mysqli_query($this->con, $sql);
    }

    public function deletekhachhang($makh)
    {

        $sql = "DELETE FROM `khachhang` WHERE makh ='$makh'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
    public function checkKhachhang($ma){
        $sql="select * from khachhang where cmnd='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }
}