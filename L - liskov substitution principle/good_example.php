<?php

class A {
    public function getNome() {
        return "Meu nome é A";
    }
}

class B extends A {
    public function getNome() {
        return "Meu nome é B"; # Retorno condizente com o do método da classe pai
    }
}

function imprimeNome(A $obj) {
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimeNome($objeto1).'<br/>';
echo imprimeNome($objeto2);
