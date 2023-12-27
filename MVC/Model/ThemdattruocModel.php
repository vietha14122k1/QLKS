<?php 
$this->themdattruoc=$this->model("ThemdattruocModel");
class ThemdattruocModel extends connectDB{
    public function DattruocAll(){
        $sql="Select * From dattruoc";
        return mysqli_query($this->con,$sql);
    }
    public function themdattruoc($tenkh, $ngaydat, $ngaytra, $sophong, $cmnd, $diachi,$sdt)
    {
        $sql1="update phong set trangthai='Có đặt trước' where sophong='$sophong'";
        mysqli_query($this->con,$sql1);
        $sql = "INSERT INTO `dattruoc`(`tenkh`,`ngaydat`, `ngaytra`, `sophong`, `cmnd`, `diachi`,`sdt`) VALUES ('$tenkh','$ngaydat','$ngaytra','$sophong','$cmnd','$diachi','$sdt')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
    public function checkDattruoc($ma){
        $sql="select * from dattruoc where tenkh='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }

}