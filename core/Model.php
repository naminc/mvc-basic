<?php
require_once 'core/config.php';
class Model {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli(LOCALHOST, USERNAME, PASSWORD, DB_NAME);
        mysqli_set_charset($this->conn, 'utf8');
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
    }
}