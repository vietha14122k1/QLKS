<?php 
$this->themnhanvien=$this->model("ThemnhanvienModel");
class ThemnhanvienModel extends connectDB{
    public function NhanvienAll(){
        $sql="Select * From nhanvien";
        return mysqli_query($this->con,$sql);
    }
    public function themnhanvien($manv,$tennv,$chucvu,$namsinh,$sdt,$gioitinh,$diachi){
        $sql="INSERT INTO `nhanvien`(`manv`, `tennv`, `chucvu`, `namsinh`, `sdt`, `gioitinh`,`diachi`) VALUES ('$manv','$tennv','$chucvu','$namsinh','$sdt','$gioitinh','$diachi')";
        $kq=false;
        if(mysqli_query($this->con,$sql)){
            $kq=true;
        }
        return $kq;
    }

}