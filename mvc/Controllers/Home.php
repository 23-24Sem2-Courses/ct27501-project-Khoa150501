<?php 
class Home extends Controllers{
    function Homepage(){
        
        
        $this->views("homeview");
        // Call Views
        $Tong = $this->model("Cars");
        $this->views("homeview", [
            "Tong"=>$Tong->tinhGiaXe()
        ]);
       
       
    }
    
}
?>