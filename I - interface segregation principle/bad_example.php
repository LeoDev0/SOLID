<?php

interface Aves {
    public function setLocation($lat, $lng);
    public function setAltitude($alt);
    public function render();
}

class Papagaio implements Aves {
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}

}
class Pinguim implements Aves {
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {return 0}  # Violação: pinguins não voam, então esse método é 
    public function render() {}                   # inadequado e não deveria ser forçado nessa classe.
}
