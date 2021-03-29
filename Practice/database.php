<?php
/**
 * 
 */
class Database 
{
	
	public $host=DB_HOST;
    public $user=DB_USER;
    public $pass=DB_PASS;
    public $dbname=DB_NAME;
     
    public $link;
    public $error; 
    public function __construct(){
    	$this->ConnectDB();
    }

    private function ConnectDB(){
    	$this->link=new mysqli($this->host,$this->user,$this->pass,$this->dbname);
    	if(!$this->link)
    	{
    		$this->error="CONNECTION ERROR".$this->link->connect_error;
    		return flase;
    	}
    }
//select data from table 
    public function select($query)
    {
    	$result=$this->link->query($query) or die($this->link->error.__LINE__);
    	if($result->num_rows>0){
    		return $result;
    	}
    	else{
    		return fasle;
    	}
    }
    //insert data into table 
    public function insert($query){
    	$insert_row=$this->link->query($query) or die($this->link->error.__LINE__);
    	if($insert_row){
    		header("Location:index.php?msg=".urlencode('data inserted successfully'));
    		exit();
    	}
    	else{
    		die($this->link->error.__LINE__);
    	}

    }
    //update data
    public function update($query){
    	$update_row=$this->link->query($query) or die($this->link->error.__LINE__);
    	if($update_row){
    		header("Location:index.php?msg=".urlencode('data inserted successfully'));
    		exit();
    	}
    	else{
    		die($this->link->error.__LINE__);
    	}

    }
    //delete
    public function delete($query){
    	$delete_row=$this->link->query($query) or die($this->link->error.__LINE__);
    	if($delete_row){
    		header("Location:index.php?msg=".urlencode('data inserted successfully'));
    		exit();
    	}
    	else{
    		die($this->link->error.__LINE__);
    	}

    }
}
?>