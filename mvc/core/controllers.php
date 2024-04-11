<?php 
class Controllers{
    public function model($model){
        require_once "./mvc/Models/".$model.".php";
        return new $model;
    }

    public function views($view, $data=[]){
        require_once "./mvc/Views/".$view.".php";
        // return new $view
    }
    
}

?>