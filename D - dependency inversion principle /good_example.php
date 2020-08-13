<?php

interface DBConnection {
    public function connect();
}

class MySQLConnection implements DBConnection {
    public function connect() {}
}

class OracleConnection implements DBConnection {
    public function connect() {}
}

class MongoConnection implements DBConnection {
    public function connect() {}
}

class UsuarioDAO {
    private $db;

    public function __construct(DBConnection $dbCon) { # injeção de dependência
        $this->db = $dbCon
    }
}


$dbCon = new MongoConnection(...);

$usuarioDAO = new UsuarioDAO($dbCon);
$usuarioDAO2 = new UsuarioDAO($dbCon);
