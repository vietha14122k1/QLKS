<?php
$this->nhanvien = $this->model("NhanvienModel");
class NhanvienModel extends connectDB
{

    public function NhanvienAll()
    {
        $sql = "Select * From nhanvien";
        return mysqli_query($this->con, $sql);
    }
    public function getNhanvien($manv)
    {
        $sql = "Select * From nhanvien where manv='$manv'";
        return mysqli_query($this->con, $sql);
    }
    public function checkNhanvien($ma){
        $sql = "Select * From nhanvien where manv='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }
    public function Updatenhanvien($manv, $tennv, $chucvu, $namsinh, $sdt, $gioitinh, $diachi)
    {
        $sql = "update nhanvien set tennv='$tennv', chucvu='$chucvu', namsinh='$namsinh', sdt='$sdt', gioitinh='$gioitinh', diachi='$diachi' where manv='$manv'";
        return mysqli_query($this->con, $sql);
    }

    public function themnhanvien($manv, $tennv, $chucvu, $namsinh, $sdt, $gioitinh, $diachi)
    {
        $sql = "INSERT INTO `nhanvien`(`manv`, `tennv`,`chucvu`, `namsinh`, `sdt`, `gioitinh`, `diachi`) VALUES ('$manv','$tennv','$chucvu','$namsinh','$sdt','$gioitinh','$diachi')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }

    // public function getNhanvien($manv)
    // {
    //     $sql = "Select * From nhanvien where manv='$manv'";
    //     return mysqli_query($this->con, $sql);
    // }
    // public function getmanhanvien()
    // {
    //     $sql = "Select distinct mahh From nhanvien";
    //     return mysqli_query($this->con, $sql);
    // }
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From nhanvien where manv like '%$tg%' or tennv like '%$tg%' or diachi like '%$tg%' ";
        return mysqli_query($this->con, $sql);
    }

    public function deletenhanvien($manv)
    {

        $sql = "DELETE FROM `nhanvien` WHERE manv ='$manv'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
}