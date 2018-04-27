<?php
session_start();
Class Database
{
    public $pdo ;
	private $dsn ;

    public function __construct($hostname,$username,$password,$dbname)
    {
        $this->dsn = 'mysql:host='.$hostname.';dbname='.$dbname;
		$this->pdo = new PDO($this->dsn, $username, $password);
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->pdo->exec("SET CHARACTER SET utf8");
    }
		
	//SELECT QUERY
    private $select ;
    public function select($table,$data = "*"){
        if($data != "*"){
            $keys = "";
            foreach($data as $key){
                $keys .= $key.",";
            }
			// take off the last comma
            $keys = substr($keys,0,-1);
            $this->select = "SELECT ".$keys." FROM ".$table;
        }else{
            $this->select = "SELECT ".$data." FROM ".$table;
        }
    }


//FETCH DATA
	private $stmt;
	private $data;
    public function fetchData(){
		$this->stmt = $this->pdo->prepare($this->select.$this->whereLike.$this->whereEq.$this->orderBy);
		//builds the prepare statement for you with the blueprint^^^^
		
		if($this->whereEq){
			$this->stmt->bindParam($this->eqBindVal, $this->eqSearchVal, $this->eqDataType);	
		}

		if($this->whereLike){
			$this->stmt->bindParam($this->bindVal, $this->searchVal, $this->dataType);
		}
		
		$this->stmt->execute();
		$data = $this->stmt->fetchAll();
		foreach($data as $row){
			$result[] = $row;
		}
		
		return $result;
        
    }
	
	//ORDER BY
    private $orderBy;
    public function orderBy($field_name,$order){
        $this->orderBy = " ORDER BY ".$field_name." ".$order;
    }
	
	
	//equals WHERE
	private $whereEq;
	private $eqBindVal;
	private $eqSearchVal;
	private $eqDataType;
    public function whereEq($key,$val,$dType = 's'){
                $this->whereEq = " WHERE " . $key . " = :".$key;
				$this->eqBindVal = ":".$key;
				$this->eqSearchVal = $val;
				$this->eqDataType = $this->getDataType($dType);
    }
	
	// WHERE LIKE
	private $whereLike;
	private $bindVal; // value that you are going to bind in 
	private $searchVal;
	private $dataType;

	public function whereLike($key, $val, $dType = 's'){
		$this->whereLike = ' WHERE ' . $key . ' LIKE :' .$key;
		$this->bindVal = ':'.$key;
		$this->searchVal = '%'.$val.'%';
		$this->dataType = $this->getDataType($dType);
	}

	private function getDataType($dType){
				switch ($dType) {
					case is_int('s'):
                	$returnDtype = PDO::PARAM_STR;
                	break;
            		case is_int('i'):
                	$returnDtype = PDO::PARAM_INT;
                	break;
            		case is_bool('b'):
                	$returnDtype = PDO::PARAM_BOOL;
                	break;
            		case is_null('n'):
                	$returnDtype = PDO::PARAM_NULL;
                	break;
            		default:
                	$returnDtype = PDO::PARAM_STR;
        		}	
			return $returnDtype;
	}
	
	
	
}
require_once('../includes/conn.inc.php');
	