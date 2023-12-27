<?php
class Datphong extends controller
{
    public $datphong;
    public function __construct()
    {
        $this->datphong = $this->model("DatphongModel");
    }
    function Get_data()
    {
        $this->view("MasterLayout", [
            "page" => "DatphongView",
            "kq" => $this->datphong->DatphongAll(),
            "result" => $this->datphong->DatphongAll()
        ]);
    }
}