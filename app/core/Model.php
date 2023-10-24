<?php

class Model {
    
    use Database;

    public function getData(){
        $test = $this->query("SELECT * FROM data");
        echo json_encode($test);
    }

    public function insert(){}
    public function update(){}
    public function delete(){}

}