<?php 

class Database {

    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    protected $_database = "mvc";
    protected $_conn;

    public function __construct(){
        $this->_conn = mysqli_connect($this->_host, $this->_username, $this->_password, $this->_database);
        mysqli_set_charset($this->_conn, 'utf8');
        if(mysqli_connect_errno()) {
                echo 'Connect error: '.mysqli_connect_error();
            }
    }


    public function execute($sql){
        $result = $this->_conn->query($sql);
        return $result;
    }

    public function getConnection() {
        return $this->_conn;
    }
}
?>