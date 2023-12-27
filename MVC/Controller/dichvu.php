<?php
class Dichvu extends controller
{
    public $dichvu;
    public function __construct()
    {
        $this->dichvu = $this->model("DichvuModel");
    }
    function Get_data()
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DichvuView",
            "kq" => $this->dichvu->DichvuAll(),
            "result" => $this->dichvu->DichvuAll()
        ]);
    }
    function timkiem()
    {
        $kq = $this->model('DichvuModel');
        $test = isset($_POST['btn_search']);
        if ($test) {
            $madv = $_POST['madv'];
            $kq = $this->dichvu->timkiemtheoma($madv);
            $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
                "page" => "DichvuView",
                "kq" => $this->dichvu->timkiemtheoma($madv),

            ]);
        }
    }
    function UpdateDichvuView($madv)
    {
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "UpdateDichvuView",
            "kq" => $this->dichvu->getDichvu($madv)
        ]);
    }
    public function update()
    {
        $madv = $_POST['madv'];
        $tendv = $_POST['tendv'];
        $sophong = $_POST['sophong'];
        $banggia = $_POST['banggia'];
        $this->dichvu->Updatedichvu(
            $madv,
            $tendv,
            $sophong,
            $banggia
        );
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DichvuView",
            'kq' => $this->dichvu->DichvuAll()
        ]);
    }

    function delete($madv)
    {
        $kq = $this->dichvu->deletedichvu($madv);
        $this->view((isset($_SESSION['username']))?'MasterLayout1':'MasterLayout2', [
            "page" => "DichvuView",
            "kq" => $this->dichvu->DichvuAll()
        ]);
    }
}