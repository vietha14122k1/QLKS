<?php
class themdichvu extends Controller
{
    public $themdichvu;
    public function __construct()
    {
        $this->themdichvu = $this->model("ThemdichvuModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "ThemdichvuView"
        ]);
    }
    function themdichvu()
    {

        $test = isset($_POST['btnLuu']);
        if ($test) {
            $madv = $_POST['madv'];
            $tendv = $_POST['tendv'];
            $sophong = $_POST['sophong'];
            $bnaggia = $_POST['banggia'];
            if(!$this->themdichvu->checkDichvu($madv))
            $this->themdichvu->themdichvu(
                $madv,
                $tendv,
                $sophong,
                $bnaggia
            );
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "DichvuView",
                "kq" => $this->themdichvu->DichvuAll()
            ]);
        }
    }
}