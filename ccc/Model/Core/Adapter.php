<?php
namespace Model\Core;

class Adapter{

    public $config=[
        'host'=>'localhost',
        'username'=>'root',
        'password'=>'',
        'database'=>'application'];

    public $connect=null;

    public function connection(){
        $connect = new \mysqli($this->config['host'],$this->config['username'],$this->config['password'],$this->config['database']);
        $this->setConnect($connect);
        return $this;

    }
    public function getConnect(){
        return $this->connect;
    }
    public function setConnect(\mysqli $connect){
        $this->connect=$connect;
        return $this;
    }

    public function isConnected(){
        if (!$this->getConnect()) {
                return false;
        } else {
                return true;
        }
    }

    public function insert($query){
        if (!$this->isConnected()) {
            $this->connection();
        }
        $result=mysqli_query($this->getConnect(),$query);
        if($result){
        return mysqli_insert_id($this->getConnect()); 
        } else {
        return false;
        }
    }

    public function delete($query){
        if (!$this->isConnected()) {
            $this->connection();
        } 
        $result=mysqli_query($this->getConnect(),$query);
        if($result){
        return true;
        } else {
            return false;
            
        }
    }

    public function update($query){
        if (!$this->isConnected()) {
            $this->connection();
        } 
        $result=mysqli_query($this->getConnect(),$query);
        if($result){
            return true;
        } else {
            return false;
        }
    }
    public function edit($query = null){
        if (!$this->isConnected()) {
            $this->connection();
        } 
        $result =  mysqli_query($this->getConnect(), $query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }

    public function fetchPairs($query){
        if (!$this->isConnected()) {
            $this->connection();
        } 
        $result = mysqli_query($this->getConnect(), $query);
        $rows = $result->fetch_all();
        
        if(!$rows){
            return $rows;
        }
        $columns = array_column($rows,'0');
        $values = array_column($rows,'1');
        return array_combine($columns,$values);
    }
    public function fetchAll($query){
        if (!$this->isConnected()) {
            $this->connection();
        } 
        $result = mysqli_query($this->getConnect(), $query);
        $row = mysqli_fetch_all($result,MYSQLI_ASSOC);
    /* if ($row) {
            foreach ($row as $key => $value) {
                $data = $value;
                $final[] = $data;
            }*/
        return $row;   
}


}
?>