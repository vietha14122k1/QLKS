<?php 
$this->themdichvu=$this->model("ThemdichvuModel");
class ThemdichvuModel extends connectDB{
    public function DichvuAll(){
        $sql="Select * From dichvuphong";
        return mysqli_query($this->con,$sql);
    }
    public function themdichvu($madv,$tendv,$sophong,$banggia){
        $sql="INSERT INTO `dichvuphong`(`madv`, `tendv`, `sophong`, `banggia`) 
        VALUES ('$madv','$tendv','$sophong','$banggia')";
        $kq=false;
        if(mysqli_query($this->con,$sql)){
            $kq=true;
        }
        return $kq;
    }
    public function checkDichvu($ma){
        $sql="select * from dichvuphong where madv='$ma'";
        $data=mysqli_query($this->con,$sql);
        if(mysqli_num_rows($data)>0) return true;
        return false;
    }

}