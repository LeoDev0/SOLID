<?php

class ContratoClt {
    public function calcularSalario() {
        return "Regras de remuneração para CLT"
    }
}

class Estagio {
    public function bolsaAuxilio() {
        return "Regras de remuneração para Estágio"
    }
}

class ContratoPj {
    public function calcularPagamento() {
        return "Regras de remuneração para PJ"
    }
}

class FolhaDePagamento {
    public function ($calcular) {
        $salario = 0;

        if ($funcionario instanceof ContratoClt) {
            $salario = $funcionario->CalcularSalario();
        } elseif ($funcionario instanceof Estagio) {
            $salario = $funcionario->bolsaAuxilio();
        } elseif ($funcionario instanceof ContratoPj) {
            $salario = $funcionario->calcularPagamento();
        }

        return $salario;
    }
}
