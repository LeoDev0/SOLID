<?php

class MySQLConnection {
    public function connect() {}
}

class UsuarioDAO {
    private $db;

    public function __construct() {
        $this->db = new MySQLConnection();  // O usuarioDAO está totalmente dependente da instanciação da classe MySQLConnection
    }
}
