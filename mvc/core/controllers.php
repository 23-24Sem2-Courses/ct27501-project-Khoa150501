<?php 
class Controllers{
    public function model($model){
        require_once "./mvc/Models/".$model.".php";
        // return new $model;
    }

    public function views($view, $data=[]){
        // Lấy đường dẫn URL hiện tại
        require_once "./mvc/Views/pages/".$view.".php";
    }
    public function viewsAdmin($view, $data=[]){
        // Lấy đường dẫn URL hiện tại
        require_once "./mvc/Views/".$view.".php";
    }
}

?>