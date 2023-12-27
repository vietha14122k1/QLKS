<?php
class Phong extends controller
{
    public $phong;
    public function __construct()
    {
        $this->phong = $this->model("PhongModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "PhongView",
            "kq" => $this->phong->PhongAll()
        ]);
    }
    function timkiem()
    {
        $test = isset($_POST['btn_search']);
        if ($test) {
            $madv = $_POST['key'];
            $loai_phong=$_POST['value_search'];
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "PhongView",
                "key" => $madv,
                "value_search" => $loai_phong,
                "kq" => $this->phong->timkiemtheoma($madv,$loai_phong),
            ]);
        }
    }
    public function AddPhongView(){
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemPhongView"
        ]);
    }
    public function AddPhong(){

        $sophong = $_POST['sophong'];
        $loaiphong = $_POST['loaiphong'];
        $sotang = $_POST['sotang'];
        $trangthai = $_POST['trangthai'];
        if(!$this->phong->checkPhong($sophong))
        $this->phong->themPhong($sophong,$loaiphong,$sotang,$trangthai);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "PhongView",
            "kq" => $this->phong->PhongAll()
        ]);
        

    }
    function fastchange($maphong){
        $state=$this->phong->getstate($maphong);
        $this->phong->exchange($maphong,$state);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "PhongView",
            "kq" => $this->phong->PhongAll()
        ]);

    }
    function UpdatePhongView($sophong)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdatePhongView",
            "kq" => $this->phong->getPhong($sophong)
        ]);
    }
    public function update()
    {
        $sophong = $_POST['sophong'];
        $loaiphong = $_POST['loaiphong'];
        $sotang = $_POST['sotang'];
        $trangthai = $_POST['trangthai'];
        $this->phong->Updatephong(
            $sophong,
            $loaiphong,
            $sotang,
            $trangthai
        );
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "PhongView",
            'kq' => $this->phong->PhongAll()
        ]);
    }

    function delete($madv)
    {
        $this->phong->deletephong($madv);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "PhongView",
            "kq" => $this->phong->PhongAll()
        ]);
    }
}