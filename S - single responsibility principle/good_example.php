<?php

class Usuario {
    public function setNome() {};
    public function getNome() {};
}

class UsuarioBD {
    public function add(Usuario $user) {};
    public function update(Usuario $user) {};
    public function delete($id) {};
}
