<?php
class themdattruoc extends Controller
{
    public $themdattruoc;
    public function __construct()
    {
        $this->themdichvu = $this->model("ThemdattruocModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemdattruocView"
        ]);
    }
    function themdattruoc()
    {

        $test = isset($_POST['btnLuu']);
        if ($test) {
         
            $tenkh = $_POST['tenkh'];
            $ngaydat = $_POST['ngaydat'];
            $ngaytra = $_POST['ngaytra'];
            $sophong = $_POST['sophong'];
            $cmnd = $_POST['cmnd'];
            $diachi = $_POST['diachi'];
            $sdt = $_POST['sdt'];
            if(!$this->themdattruoc->checkDattruoc($tenkh))
            $this->themdattruoc->themdattruoc(
               
                $tenkh,
                $ngaydat,
                $ngaytra,
                $sophong,
                $cmnd,
                $diachi,
                $sdt
            );
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "ThemdattruocView",
                "kq" => $this->themdattruoc->DattruocAll()
            ]);
        }
    }
}