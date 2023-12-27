<?php 
$this->themkhachhang=$this->model("ThemkhachhangModel");
class ThemkhachhangModel extends connectDB{
    public function KhachhangAll(){
        $sql="Select * From khachhang";
        return mysqli_query($this->con,$sql);
    }
    public function themkhachhang($tenkh,$ngaydat,$ngaytra,$sophong,$cmnd,$diachi,$sdt){
        $sql="INSERT INTO `khachhang`( `tenkh`, `ngaydat`, `ngaytra`, `sophong`, `cmnd`,`diachi`,`sdt`) VALUES ('$tenkh','$ngaydat','$ngaytra','$sophong','$cmnd','$diachi','$sdt')";
        $kq=false;
        if(mysqli_query($this->con,$sql)){
            $kq=true;
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