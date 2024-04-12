<?php 

class admin extends Controllers{
    function admin(){
        
        $this->Views("adminUser");
    }
    function productadmin(){
        
        $this->views(("productadmin"));
    }
}

?>