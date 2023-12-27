<?php
class themkhachhang extends Controller
{
    public $themkhachhang;
    public function __construct()
    {
        $this->themkhachhang = $this->model("ThemkhachhangModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemkhachhangView"
        ]);
    }
    function themkhachhang()
    {

        $test = isset($_POST['btnLuu']);
        if ($test) {
            $makh = $_POST['makh'];
            $tenkh = $_POST['tenkh'];
            $ngaydat = $_POST['ngaydat'];
            $ngaytra = $_POST['ngaytra'];
            $sophong = $_POST['sophong'];
            $cmnd = $_POST['cmnd'];
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            if(!$this->themkhachhang->checkKhachhang($makh))
            $this->themkhachhang->themkhachhang(
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
                "kq" => $this->themkhachhang->KhachhangAll()
            ]);
        }
    }
}