<?php
define('DB_HOST',        'localhost');
define('DB_USER',        'root');
define('DB_PASSWORD',    '');
define('DB_NAME',        'landing_page');
define('DB_TBL_USER',    'user');

//DATABASE TABLES
define('TBL_USER',       'user');
define("CURRENT_DATE",   date("Y-m-d"));
define("CURRENT_TIME",   date("H:i:s"));


session_start();
class Database {
  
	public $connection;

	function __construct(){

		$this->open_db_connection();
	}

  private $db_host = "localhost"; 
  private $db_user = "root"; // Change as required
  private $db_pass = ""; // Change as required
  private $db_name = "landing_page";


	public function open_db_connection(){
    $this->connection =  new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

    // if ($this->connection->connect_errno) {
    //   die("Database connection failed" . $this->connection->connect_error);
    // }

  }

   /* 
    CONFIRM QUERY
  */
  private function confirm_query($result) {

		if(!$result){
			die("Query failed" . $this->connection->error);
		}

  }
  
  /* 
    CLEAN UP QUERY
  */
  public function escape_string($sql) {
		$escape_string = $this->connection->real_escape_string($sql);
		return $escape_string;
	}

   /* 
    QUERY
  */
  public function query($sql) {
    $this->connection->escape_string($sql);
    $result = $this->connection->query($sql);
		$this->confirm_query($result);
    return $result;
  }
  
  /* 
    INSERT QUERY
  */
  public function saveData($table, $sql){
      return $this->query("INSERT INTO " . $table . "  SET " . $sql);
  }

  
  /* 
  SELECT QUERY
  */
  public function selectData($table, $field = '*', $conditions = "", $column = ''){
    $rows = [];
		$fields = trim($field);
		$where = !empty($conditions) ? "WHERE" : "";
    $result = $this->query("SELECT " . $fields . " FROM " . $table . "  $where " . $conditions);
    $row_cnt = $result->num_rows;
		if (!empty($result)) {
      while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
      }
      return $rows;
    }
  }
  
  public static function  findUserByEmail($email){
    global $db, $fun;
    return $db->selectData(TBL_USER , "*" , "email ='$email' ");

  }

  public static function ValidationForRegistration($error){
    if (empty($_POST['name'])) { //check for empty email
      $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>The name field can not be empty</p>";
  //}elseif($_POST['name'] <=6){
    //$error = "This name is a robot name, Sorry";
  }elseif (empty($_POST['email'])) { //check for empty email
        $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>The email field can not be empty</p>";
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>Provide a valid email format</p>";
    }

    return $error;
}

  public static function ValidationForMessage($error){
    if (empty($_POST['name'])) { //check for empty email
      $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>The name field can not be empty</p>";
    }elseif (empty($_POST['email'])) { //check for empty email
      $error = "<p style='color:red; padding:10px'>The email field can not be empty</p>";
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
      $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>Provide a valid email format</p>";
    }else if(empty($_POST['message'])){
      $error = "<p style='color:red;padding:10px;font-weight:bold;font-size:18px;'>The message field can not be empty</p>";
    }

    return $error;
  }

  
  public function escape($data) {
		return strtolower(trim(addslashes($this->connection->real_escape_string($data))));
	}
}

$db = new Database;