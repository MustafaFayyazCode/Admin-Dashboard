<?php

class connection{
    private $host="localhost";
    private $name="root";
    private $password="";
    private $database="event_admin";
    private $conn=false;
    public $mysqli="";
    private $result=array();

    public function __construct(){
        if(!$this->conn){
           $this->mysqli=new mysqli($this->host,$this->name,$this->password,$this->database);
           if($this->mysqli){
            $this->conn=true;
            echo "connected";
           }else{
            return false;
           }
        }else{
            return false;
        }
    }

    public function insert($category,$val=array()){
        $col=implode(',',array_keys($val));
        $data=implode("','",$val);
        $sql="INSERT INTO $category ($col) VALUES ('$data')";
        // echo $sql;
        if($this->mysqli->query($sql)){
            return "inserted";
        }else{
            return "not inserted";
        }
    }

    public function update($table,$val=array(),$where=null){
       
        $arg=array();
        foreach($val as $key=>$data){
           $arg[]="`$key`='$data'";
        }
       $all=implode(',',$arg);
         $sql="UPDATE $table SET ".$all." WHERE $where";
         if($this->mysqli->query($sql)){
echo "DATA HAS BEEN UPDATED";
         }
    }

    public function delete($table,$where=null){
        $sql="DELETE FROM $table"." WHERE $where";
        if($this->mysqli->query($sql)){
               echo "DATA HAS BEEN DELETED";
        }
    }

    public function select($table,$rows="*",$where=null,$order=null,$limit=null){
        $sql="SELECT $rows FROM $table";
        if($where!=null){
            $sql=$sql." WHERE $where";
        }
        if($order!=null){
            $sql=$sql." ORDER BY $order";
        }
        if($limit!=null){
            $sql=$sql." LIMIT 0,$limit";
        }
        $query=$this->mysqli->query($sql);
        if($query){
            $this->result=$query->fetch_all(MYSQLI_ASSOC); 
            return  $this->result;
        }else{
            echo "data not selected";
        }
    }
}
?>