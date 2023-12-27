<?php
class Khachhang extends controller
{
    public $khachhang;
    public function __construct()
    {
        $this->khachhang = $this->model("KhachhangModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "KhachhangView",
            "kq" => $this->khachhang->KhachhangAll(),
            "result" => $this->khachhang->KhachhangAll()
        ]);
    }
    function timkiem()
    {
        $kq = $this->model('KhachhangModel');
        $test = isset($_POST['btn_search']);
        if ($test) {
            $makh = $_POST['makh'];
            $kq = $this->khachhang->timkiemtheoma($makh);
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "KhachhangView",
                "kq" => $this->khachhang->timkiemtheoma($makh),

            ]);
        }
    }
    function UpdateKhachhangView($makh)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateKhachhangView",
            "kq" => $this->khachhang->getKhachhang($makh)
        ]);
    }
    public function update()
    {
        $makh = $_POST['makh'];
        $tenkh = $_POST['tenkh'];
        $ngaydat = $_POST['ngaydat'];
        $ngaytra = $_POST['ngaytra'];
        $sophong = $_POST['sophong'];
        $cmnd = $_POST['cmnd'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $this->khachhang->Updatekhachhang(
            $makh,
            $tenkh,
            $ngaydat,
            $ngaytra,
            $sophong,
            $cmnd,
            $diachi,
            $sdt
        );
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "KhachhangView",
            'kq' => $this->khachhang->KhachhangAll()
        ]);
    }

    function delete($makh)
    {
        $kq = $this->khachhang->deletekhachhang($makh);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "KhachhangView",
            "kq" => $this->khachhang->KhachhangAll()
        ]);
    }
}