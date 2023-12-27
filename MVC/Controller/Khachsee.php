<?php
class Khachsee extends controller
{
    public $khachsee;
    public function __construct()
    {
        $this->khachsee = $this->model("KhachseeModel");
    }
    function Get_data()
    {
        $this->view("MasterLayout2", [
            "page" => "KhachseeView",
            "kq" => $this->khachsee->KhachseeAll(),
            "result" => $this->khachsee->KhachseeAll()
        ]);
    }
    function timkiem()
    {
        $kq = $this->model('KhachseeModel');
        $test = isset($_POST['btn_search']);
        if ($test) {
            $makh = $_POST['makh'];
            $kq = $this->khachsee->timkiemtheoma($makh);
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "KhachseeView",
                "kq" => $this->khachsee->timkiemtheoma($makh),

            ]);
        }
    }
    function UpdateKhachseeView($makh)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateKhachseeView",
            "kq" => $this->khachsee->getKhachsee($makh)
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
        $this->khachsee->Updatekhachsee(
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
            "page" => "KhachseeView",
            'kq' => $this->khachsee->KhachseeAll()
        ]);
    }

    function delete($makh)
    {
        $kq = $this->khachsee->deletekhachsee($makh);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "KhachseeView",
            "kq" => $this->khachsee->KhachseeAll()
        ]);
    }
}