<?php
$this->dichvu = $this->model("DichvuModel");
class DichvuModel extends connectDB
{

    public function DichvuAll()
    {
        $sql = "Select * From dichvuphong";
        return mysqli_query($this->con, $sql);
    }
    public function getDichvu($madv)
    {
        $sql = "Select * From dichvuphong where madv='$madv'";
        return mysqli_query($this->con, $sql);
    }
    public function Updatedichvu($madv, $tendv, $sophong, $banggia)
    {
        $sql = "update dichvuphong set tendv='$tendv', sophong='$sophong', banggia='$banggia' where madv='$madv'";
        return mysqli_query($this->con, $sql);
    }

    public function themdichvu($madv, $tendv, $sophong, $banggia)
    {
        $sql = "INSERT INTO `dichvuphong`(`madv`, `tendv`,`sophong`, `banggia`)
            VALUES ('$madv', '$tendv', '$sophong', '$banggia')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }

   
    // public function getmandichvu()
    // {
    //     $sql = "Select distinct madv From dichvu";
    //     return mysqli_query($this->con, $sql);
    // }
    public function timkiemtheoma($tg)
    {
        $sql = "Select * From dichvuphong where madv like '%$tg%' or tendv like '%$tg%' or sophong like '%$tg%' ";
        return mysqli_query($this->con, $sql);
    }

    public function deletedichvu($madv)
    {

        $sql = "DELETE FROM `dichvuphong` WHERE madv ='$madv'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
}