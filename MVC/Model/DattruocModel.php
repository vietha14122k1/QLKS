<?php
$this->dattruoc = $this->model("DattruocModel");
class DattruocModel extends connectDB
{

    public function DattruocAll()
    {
        $sql = "Select * From dattruoc";
        return mysqli_query($this->con, $sql);
    }
    public function getDattruoc($makh)
    {
        $sql = "Select * From dattruoc where cmnd='$makh'";
        return mysqli_query($this->con, $sql);
    }
    public function Updatedattruoc( $tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql = "update dattruoc set tenkh='$tenkh', ngaydat='$ngaydat', ngaytra='$ngaytra', sophong='$sophong',  diachi='$diachi', sdt='$sdt' where cmnd='$cmnd'";
        return mysqli_query($this->con, $sql);
    }

   

  
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From dattruoc where makh like '%$tg%' or tenkh like '%$tg%' or diachi like '%$tg%' or cmnd like '%$tg%' or sdt like '%$tg%'   ";
        return mysqli_query($this->con, $sql);
    }

    public function deletedattruoc($makh)
    {

        $sql = "DELETE FROM `dattruoc` WHERE cmnd ='$makh'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
    public function checkdattruoc($cmnd){
        $sql="select * from dattruoc where cmnd='$cmnd'";
        if(mysqli_num_rows(mysqli_query($this->con,$sql))>0) return true;
        return false;
    }
}