<?php

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel {
    public function remuneracao() {
        return "Regras de remuneração para CLT";
    }
}

class Estagio implements Remuneravel {
    public function remuneracao() {
        return "Regras de remuneração para Estágio";
    }
}

class ContratoPj implements Remuneravel {
    public function remuneracao() {
        return "Regras de remuneração para PJ";
    }
}

class FolhaDePagamento {
    public function calcular(Remuneravel $funcionario) {
        return $funcionario->remuneracao();
    }
}
