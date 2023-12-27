<?php
class Login extends Controller{
    public $login;
    public function __construct(){
        $this->login=$this->model('LoginModel');
    }
    function Get_data(){
        session_destroy();
        $this->view('LoginView',[]);
    }
    function checklogin(){
        if(isset($_POST['btnDangnhap'])){
            
            $user=$_POST['username'];
            $pass=$_POST['password'];
            $kq=$this->login->CheckLogin($user,$pass);
            
            if(!$kq){
                $this->view('LoginView',[
                    'thongbao'=>'Tên đăng nhập hoặc mật khẩu không đúng!'
                ]);
            }
            else{
                $_SESSION['username']=$user;
                $this->view('MasterLayout1',[
                    'page'=>'HomeView'
                    
                ]);
            }
        }
    }
}