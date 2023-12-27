<?php
class Loaiphong extends controller
{
    public $loaiphong;
    public function __construct()
    {
        $this->loaiphong = $this->model("LoaiphongModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "LoaiphongView",
            "kq" => $this->loaiphong->LoaiphongAll()
        ]);
    }
    function timkiem()
    {
        $test = isset($_POST['btn_search']);
        if ($test) {
            $madv = $_POST['key'];
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "LoaiphongView",
                "kq" => $this->loaiphong->timkiemtheoma($madv),
            ]);
        }
    }
    public function AddLoaiphongView(){
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemLoaiphongView"
        ]);
    }
    public function AddLoaiphong(){
        
        
        $loaiphong = $_POST['loaiphong'];
        $sogiuong = $_POST['sogiuong'];
        $gioihannguoi = $_POST['gioihannguoi'];
        $giatien = $_POST['giatien'];
        if(!$this->loaiphong->checkLoaiphong($loaiphong))
        $this->loaiphong->themLoaiphong($loaiphong,$sogiuong,$gioihannguoi,$giatien);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "LoaiphongView",
            "kq" => $this->loaiphong->LoaiphongAll()
        ]);
        

    }
    function UpdateLoaiphongView($sophong)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateLoaiphongView",
            "kq" => $this->loaiphong->getLoaiphong($sophong)
        ]);
    }
    public function update()
    {
        $loaiphong = $_POST['loaiphong'];
        $sogiuong = $_POST['sogiuong'];
        $gioihannguoi = $_POST['gioihannguoi'];
        $giatien = $_POST['giatien'];
        $this->loaiphong->Updateloaiphong(
            $loaiphong,
            $sogiuong,
            $gioihannguoi,
            $giatien
        );
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "LoaiphongView",
            'kq' => $this->loaiphong->LoaiphongAll()
        ]);
    }

    function delete($madv)
    {
        $this->loaiphong->deleteloaiphong($madv);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "LoaiphongView",
            "kq" => $this->loaiphong->LoaiphongAll()
        ]);
    }
}