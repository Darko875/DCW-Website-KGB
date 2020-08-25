
<?php  
class dbConnect {  
    function __construct() {  
        require_once('config.php');  
        $conn = mysqli_connect(server, user, password);  
        mysqli_select_db($conn, db);  
        if(!$conn)// testing the connection  
        {  
            die ("Cannot connect to the database");  
        }   
        return $conn;  
    }  
    public function Close(){  
        mysql_close();  
    }  
}  


?>