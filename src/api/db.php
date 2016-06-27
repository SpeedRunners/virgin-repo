<?php 
namespace App\Api;

class DB{

    private $table;
    private $error ="";
        
    private $host;
    private $user;
    private $password;
    private $database;
    
    public function __construct($table)
    {
        $this->table = $table; 
        $this->host = DATABASE_HOST; 
        $this->user = DATABASE_USER; 
        $this->password = DATABASE_PASSOWD; 
        $this->database = DATABASE_NAME; 
    }
    
    private function connection($query){
        mysqli_report(MYSQLI_REPORT_STRICT);
        try{
            $connection = new \mysqli($this->host,$this->user,$this->password, $this->database );
            
            if( $connection -> connect_errno != 0 ) throw new \Exception(mysqli_connect_errno());
                    
            if(!$connection -> query($query)) throw new \Exception($connection -> error);
            
            $connection -> close();
        }
        catch(\Exception $e){
            $this->error = $e;
            return false;
        }
        return true;
    }
    
    public function insert($what, $values){
        $query = "INSERT INTO ".$this->table." (".$what.") VALUES (".$values.")";
        return $this->connection($query);
           
    }
    
    public function truncate(){
        $query = "TRUNCATE TABLE ".$this->table;
        return $this->connection($query);
    } 
    
    public function select($what = "*" , $options = "WHERE 1=1"){       
        mysqli_report(MYSQLI_REPORT_STRICT);
        try{
            $connection = new \mysqli($this->host,$this->user,$this->password, $this->database );
            
            if( $connection -> connect_errno != 0 ) throw new \Exception(mysqli_connect_errno());
            
            $query = "SELECT ".$what."FROM ".$this->table." ".$options;
        
            $result = $connection -> query($query);
            
            $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
                        
            mysqli_free_result($result);
            $connection -> close();
            return $data;
        }
        catch(\Exception $e){
            $this->error = $e;
            return false;
        }
        return true; 
    }
    
    public function delete($where){
        $query = "DELETE FROM ".$this->table." WHERE ".$where;
        return $this->connection($query);        
    }
    
    public function update($what, $where){
       $query = "UPDATE ".$this->table." SET ".$what." WHERE ".$where;
       return $this->connection($query);  
    }
    
    public function error(){
        return $this -> error;
    }    
    }

?>

