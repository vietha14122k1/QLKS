<?php
$this->datphong = $this->model("DatphongModel");
class DatphongModel extends connectDB
{
    public function DatphongAll()
    {
        $sql = "Select * From phong";
        return mysqli_query($this->con, $sql);
    }
    public function themhang($madon, $makh, $mahh, $ngaydat, $ngaygiao, $soluongdat, $soluonggiao, $tong)
    {
        $sql = "INSERT INTO `phong`(`madon`, `makh`, `mahh`, `ngaydat`, `ngaygiao`, `soluongdat`, `soluonggiao`, `tong`) VALUES ('$madon','$makh','$mahh','$ngaydat','$ngaygiao','$soluongdat','$soluonggiao','$tong')";
        $kq = false;
        if (mysqli_query($this->con, $sql)) {
            $kq = true;
        }
        return $kq;
    }
}