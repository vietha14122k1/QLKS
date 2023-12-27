<?php
$this->khachsee = $this->model("KhachseeModel");
class KhachseeModel extends connectDB
{

    public function KhachseeAll()
    {
        $sql = "Select sophong,sotang, sogiuong,gioihannguoi,giatien,trangthai from phong join loaiphong on phong.loaiphong=loaiphong.loaiphong";
        return mysqli_query($this->con, $sql);
    }
    public function getKhachsee($makh)
    {
        $sql = "Select * From khachsee where makh='$makh'";
        return mysqli_query($this->con, $sql);
    }
    public function Updatekhachsee($makh, $tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql = "update khachsee set tenkh='$tenkh', ngaydat='$ngaydat', ngaytra='$ngaytra', sophong='$sophong', cmnd='$cmnd', diachi='$diachi', sdt='$sdt' where makh='$makh'";
        return mysqli_query($this->con, $sql);
    }

    public function themkhachsee( $tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql = "INSERT INTO `khachsee`( `tenkh`,`ngaydat`, `ngaytra`, `sophong`, `cmnd`, `diachi`,`sdt`) VALUES ('$tenkh','$ngaydat','$ngaytra','$sophong','$cmnd','$diachi','$sdt')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }

  
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From khachsee where makh like '%$tg%' or tenkh like '%$tg%' or diachi like '%$tg%' ";
        return mysqli_query($this->con, $sql);
    }

    public function deletekhachsee($makh)
    {

        $sql = "DELETE FROM `khachsee` WHERE makh ='$makh'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
    public function checkKhachsee($ma){
        $sql="select * from khachsee where cmnd='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }
}