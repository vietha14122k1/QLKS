<?php
class themnhanvien extends Controller
{
    public $themnhanvien;
    public function __construct()
    {
        $this->nhanvien = $this->model("NhanvienModel");
        $this->themnhanvien = $this->model("ThemnhanvienModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemnhanvienView"
        ]);
    }
    function themnhanvien()
    {

        $test = isset($_POST['btnLuu']);
        if ($test) {
            $manv = $_POST['manv'];
            $tennv = $_POST['tennv'];
            $chucvu = $_POST['chucvu'];
            $namsinh = $_POST['namsinh'];
            $sdt = $_POST['sdt'];
            $gioitinh = $_POST['gioitinh'];
            $diachi = $_POST['diachi'];
            if(!$this->nhanvien->checkNhanvien($manv))
            $this->themnhanvien->themnhanvien(
                $manv,
                $tennv,
                $chucvu,
                $namsinh,
                $sdt,
                $gioitinh,
                $diachi
            );
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "NhanvienView",
                "kq" => $this->themnhanvien->NhanvienAll()
            ]);
        }
    }
}