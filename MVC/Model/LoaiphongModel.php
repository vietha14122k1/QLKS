<?php
$this->loaiphong = $this->model("LoaiphongModel");
class LoaiphongModel extends connectDB
{

    public function LoaiphongAll()
    {
        $sql = "Select * From loaiphong";
        return mysqli_query($this->con, $sql);
    }
    public function getLoaiphong($madv)
    {
        $sql = "Select * From loaiphong where loaiphong='$madv'";
        return mysqli_query($this->con, $sql);
    }
    public function Updateloaiphong($loaiphong, $sogiuong, $gioihannguoi, $giatien)
    {
        $sql = "update loaiphong set giatien='$giatien', sogiuong='$sogiuong', gioihannguoi='$gioihannguoi' where loaiphong='$loaiphong'";
        return mysqli_query($this->con, $sql);
    }
    public function checkLoaiphong($ma){
        $sql="select * from loaiphong where loaiphong='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }
    public function themLoaiphong($loaiphong, $sogiuong, $giohannguoi, $giatien)
    {
        $sql = "INSERT INTO `loaiphong`
            VALUES ('$loaiphong', '$sogiuong', '$giohannguoi', '$giatien')";
            return mysqli_query($this->con, $sql);
    }

   
    // public function getmandichvu()
    // {
    //     $sql = "Select distinct madv From dichvu";
    //     return mysqli_query($this->con, $sql);
    // }
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From loaiphong where loaiphong like '%$tg%' or gioihannguoi like '%$tg%' or giatien like '%$tg%' or sogiuong like '%$tg%'";
        return mysqli_query($this->con, $sql);
    }

    public function deleteloaiphong($sophong)
    {

        $sql = "DELETE FROM `loaiphong` WHERE loaiphong ='$sophong'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
}