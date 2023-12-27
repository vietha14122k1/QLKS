<?php 
   class app{
    protected $controller="Home";
    protected $action="Get_data";
    protected $params=[];
    function __construct(){
        $arr[0]="Home";
        if(!$this->Urlprocess()==null)
        $arr=$this->Urlprocess();
        else $arr=["Home"];
        //Xử lý Cotroller
        
        if(file_exists("./MVC/Controller/".$arr[0].".php")){
            $this->controller=$arr[0];
            unset($arr[0]);
        }
        require_once "./MVC/Controller/".$this->controller.".php";
        $this->controller=new $this->controller;
        //xử lý Action
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action=$arr[1];
            }
            unset($arr[1]);
        }
        //Xử lý params
        $this->params=$arr?array_values($arr):[];
        //tạo biến có 3 tham số
        call_user_func_array([$this->controller,$this->action],$this->params);
    }
    function Urlprocess(){
        if(isset($_GET["url"])){
          $flags = NULL ? "/": 0;
            //return explode("/",filter_var(trim($_GET["url"]),FILTER_DEFAULT, $flags));
          return explode("/",filter_var(trim($_GET["url"]),FILTER_DEFAULT, $flags));
        // return explode("/",filter_var(trim($_GET["url"]));
        }
    }
   }