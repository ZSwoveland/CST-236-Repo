<?php
include "Database.php";

class UserDataService
{
    private $db = new Database();
    
    //public $users;
    
    public function __construct()
    {}
    
    public function findByFirstName($pattern){
        $conn = $this->db->getConnect();
        $query = "Select * from users where FIRST_NAME LIKE %" . $pattern. "%;"; 
        $result = mysql_query($query);
        $index = 0;
        $users = array();
        while($row = $result->fetch_assoc()){
            $users[$index] = array($row["ID"], $row["FIRST_NAME"],$row["LAST_NAME"]);
            ++$index;
        }
        
        if($users == NULL){
            echo "No Users found";
        }
        else{
            
        }
    }
}

?>
