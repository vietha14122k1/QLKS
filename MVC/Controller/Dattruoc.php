<?php
class Dattruoc extends controller
{
    public $dattruoc;
    public $khachsee;
    public $phong;
    public function __construct()
    {
        $this->dattruoc = $this->model("DattruocModel");
        $this->khachhang = $this->model("KhachhangModel");
        $this->khachsee = $this->model("KhachseeModel");
        $this->phong = $this->model("PhongModel");
        
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DattruocView",
            "kq" => $this->dattruoc->DattruocAll(),
            "result" => $this->dattruoc->DattruocAll()
        ]);
    }
    function timkiem()
    {
        $test = isset($_POST['btn_search']);
        if ($test) {
            $makh = $_POST['makh'];
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "DattruocView",
                "kq" => $this->dattruoc->timkiemtheoma($makh),

            ]);
        }
    }
    function UpdateDattruocView($makh)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateDattruocView",
            "kq" => $this->dattruoc->getDattruoc($makh)
        ]);
    }
    public function update()
    {
        $tenkh = $_POST['tenkh'];
        $ngaydat = $_POST['ngaydat'];
        $ngaytra = $_POST['ngaytra'];
        $sophong = $_POST['sophong'];
        $cmnd = $_POST['cmnd'];
        $diachi = $_POST['diachi'];
        $sdt = $_POST['sdt'];
        $this->dattruoc->Updatedattruoc(
            $tenkh,
            $ngaydat,
            $ngaytra,
            $sophong,
            $cmnd,
            $diachi,
            $sdt
        );
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DattruocView",
            'kq' => $this->dattruoc->DattruocAll()
        ]);
    }

    function delete($makh)
    {
        $this->dattruoc->deletedattruoc($makh);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DattruocView",
            "kq" => $this->dattruoc->DattruocAll()
        ]);
    }
    function themdattruocview($sophong)
    {
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "ThemDattruocView",
                "sophong"=>$sophong
            ]);
    }
    
    function Xacnhan($cmnd){
        $tenkh="";
        $ngaydat=null;
        $ngaytra=null;
        $sophong="";
        
        $diachi=null;
        $sdt=null;
        $data=$this->dattruoc->getDattruoc($cmnd);
        foreach($data as $row){
            $tenkh = $row['tenkh'];
            $ngaydat =$row['ngaydat'];
            $ngaytra =$row['ngaytra'];
            $sophong =$row['sophong'];
            $cmnd =$row['cmnd'];
            $diachi =$row['diachi'];
            $sdt = $row['sdt'];
        }
        if(!$this->dattruoc->checkDattruoc($cmnd))
            $this->dattruoc->themdattruoc(
                $tenkh,
                $ngaydat,
                $ngaytra,
                $sophong,
                $cmnd,
                $diachi,
                $sdt
            );
            $this->phong->xacnhanthue($sophong);
            //nên thêm phần thêm tài khoản luôn ở đây
            $this->dattruoc->deletedattruoc($cmnd);
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "DattruocView",
                "kq" => $this->dattruoc->DattruocAll()
            ]); 
            

    }
}