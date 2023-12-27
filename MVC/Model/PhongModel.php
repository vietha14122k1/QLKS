<?php
$this->phong = $this->model("PhongModel");
class PhongModel extends connectDB
{

    public function PhongAll()
    {
        $sql = "Select * From phong";
        return mysqli_query($this->con, $sql);
    }
    public function getPhong($madv)
    {
        $sql = "Select * From phong where sophong='$madv'";
        return mysqli_query($this->con, $sql);
    }
    public function Updatephong($sophong, $loaiphong, $sotang, $trangthai)
    {
        $sql = "update phong set trangthai='$trangthai', loaiphong='$loaiphong', sotang='$sotang' where sophong='$sophong'";
        return mysqli_query($this->con, $sql);
    }
    public function checkPhong($ma){
        $sql="select * from phong where sophong='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }
    public function getstate($key){
        $sql="select trangthai from phong where sophong='$key'";
        $data=mysqli_query($this->con,$sql);
        $kq="null";
        foreach($data as $r)$kq=$r["trangthai"];
        return $kq;
    }
    public function exchange($ma,$tt){
        if($tt=="Trống") $sql="update phong set trangthai='Có đặt trước' where sophong='$ma'";
        else if($tt=="Có đặt trước") $sql="update phong set trangthai='Đã đặt' where sophong='$ma'";

        else  $sql="update phong set trangthai='Trống' where sophong='$ma'";
        return mysqli_query($this->con,$sql);
    }
    public function themPhong($sophong, $loaiphong, $sotang, $trangthai)
    {
        $sql = "INSERT INTO `phong`
            VALUES ('$sophong', '$loaiphong', '$sotang', '$trangthai')";
            return mysqli_query($this->con, $sql);
    }
    public function xacnhanthue($sophong){
        $sql1="update phong set trangthai='Đã đặt' where sophong=$sophong";
        return mysqli_query($this->con,$sql1);
    }

   
    // public function getmandichvu()
    // {
    //     $sql = "Select distinct madv From dichvu";
    //     return mysqli_query($this->con, $sql);
    // }
    public function timkiemtheoma($tg,$loai_phong)
    {
        if($loai_phong!="all")
        $sql = "Select * From phong where trangthai = '$loai_phong' and (loaiphong like '%$tg%' or trangthai like '%$tg%' or sophong like '%$tg%' or sotang like '%$tg%')";
        else
        $sql = "Select * From phong where loaiphong like '%$tg%' or trangthai like '%$tg%' or sophong like '%$tg%' or sotang like '%$tg%'";
        return mysqli_query($this->con, $sql);
    }

    public function deletephong($sophong)
    {

        $sql = "DELETE FROM `phong` WHERE sophong ='$sophong'";
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
}