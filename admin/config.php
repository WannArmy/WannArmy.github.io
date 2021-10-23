<?php

class Koneksi {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db_name = 'web';

    public function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);
    }
}