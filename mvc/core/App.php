<?php 

class App{

    protected $controllers;
    protected $action;
    protected $params;
    protected $router;
    function __construct(){


        // global $router;

        // $this->router = new Router();

        // if(!empty($router['default_controller'])){
        //     $this->controllers= $router['default_controller'];
        // }
        // $this->action = '';
        // $this->params = [];

        $arr = $this->XuLyURL();


        //xuly controller (kiểm tra có tồn tại không?)
        if(file_exists("./mvc/Controllers/".$arr[0].".php")){
            $this->controllers = $arr[0];
            unset($arr[0]);

        }
        require_once "./mvc/Controllers/".$this->controllers.".php";

        $this->controllers = new $this->controllers;
        

        //xuly phan tu [1]
        if(isset($arr[1])){
            if(method_exists($this->controllers, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        //xu ly cac tham so(params)
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([new $this->controllers, $this->action], [$this->params]);
    
        // call_user_func_array([$this->controllers, $this->action], $this->params );
    }   
  
    function XuLyURL(){
        if( isset($_GET["url"])){
            return explode("/", filter_var(trim($_GET["url"], "/")));

        }
       
    }
}

?>