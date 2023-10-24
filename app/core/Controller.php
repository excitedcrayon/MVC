<?php 

class Controller{

    public function view($view){

        $filename = "../app/views/".$view.".view.php";

        if(file_exists($filename)){
            require_once $filename;
        }else{
            require_once "../app/views/_404.view.php";
        }
    }
    
}