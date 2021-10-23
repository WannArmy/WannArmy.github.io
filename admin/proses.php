<?php

require_once 'config.php';

class Proses extends Koneksi {
    public function login($username, $password) {
        $stmt = mysqli_query($this->koneksi, "SELECT * FROM tb_user WHERE username = '" 
        . $username . "' AND password = '" . $password . "'");

        return $stmt;
    }
}