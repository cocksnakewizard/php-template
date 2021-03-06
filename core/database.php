<?php
class database {

    static $object;

    function __construct() {
        //CAST GLOBAL VARIABLE TO OBJECT
        $this->$object = (object) $this->$object;
    }//END

    //CONNECT TO DATABASE
    private function connect() {
        $server = config::$database_server;
        $user = config::$database_user;
        $secret = config::$database_secret;
        $database = config::$database_database;
        $connect = mysqli_connect($server,$user,$secret,$database);
        return $connect;
    }//END

    //GET ALL TABLE ENTRIES, SET GLOBAL OBJECT, RETURN GLOBAL OBJECT
    public function get($table) {
        $array = array();
        $database_order_by = config::$database_order_by;
        $sql = "SELECT * FROM $table ORDER BY $database_order_by";
        $query = mysqli_query($this->connect(),$sql);
        while($row = mysqli_fetch_assoc($query)) {
            array_push($array,(object) $row);
        }
        $this->$object = (object) $array; //CAST ARRAY TO OBJECT AND RETURN GLOBAL OBJECT
        return $this->$object;
    }//END

    //RETURN MATCH AS OBJECT
    public function where($key,$value) {
        $return = false;
        foreach($this->$object as $row) {
            if($row->$key == $value) {
                $return = $row;
            }
        }
        return $return;
    }//END

}//END
?>
