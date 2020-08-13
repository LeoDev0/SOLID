<?php

class A {
    public function getNome() {
        return "Meu nome é A";
    }
}

class B extends A {
    public function getNome() {
        return 30;  # Deveria retornar uma string como acontece no retorno do método da 
                    # classe pai A. Erro de inconsistência de comportamento.
    }
}

function imprimeNome(A $obj) {
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimeNome($objeto1).'<br/>';
echo imprimeNome($objeto2);
