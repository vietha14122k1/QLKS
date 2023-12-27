<?php
class Nhanvien extends controller
{
    public $nhanvien;
    public function __construct()
    {
        $this->nhanvien = $this->model("NhanvienModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "NhanvienView",
            "kq" => $this->nhanvien->NhanvienAll(),
            "result" => $this->nhanvien->NhanvienAll()
        ]);
    }
    function timkiem()
    {
        $kq = $this->model('NhanvienModel');
        $test = isset($_POST['btn_search']);
        if ($test) {
            $manv = $_POST['manv'];
            // $tennv = $_POST['tennv'];
            $kq = $this->nhanvien->timkiemtheoma($manv);
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "NhanvienView",
                "kq" => $this->nhanvien->timkiemtheoma($manv),

            ]);
        }
    }
    function UpdateNhanvienView($manv)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateNhanvienView",
            "kq" => $this->nhanvien->getNhanvien($manv)
        ]);
    }
    public function update()
    {
        $manv = $_POST['manv'];
        $tennv = $_POST['tennv'];
        $chucvu = $_POST['chucvu'];
        $namsinh = $_POST['namsinh'];
        $sdt = $_POST['sdt'];
        $gioitinh = $_POST['gioitinh'];
        $diachi = $_POST['diachi'];
        $this->nhanvien->Updatenhanvien(
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
            'kq' => $this->nhanvien->NhanvienAll()
        ]);
    }

    function delete($manv)
    {
        $kq = $this->nhanvien->deletenhanvien($manv);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "NhanvienView",
            "kq" => $this->nhanvien->NhanvienAll()
        ]);
    }
}