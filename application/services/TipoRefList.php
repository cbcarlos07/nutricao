<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/08/2015
 * Time: 08:45
 */
class Tipo_Ref_List {
    private $tipo = array();
    private $tipoCount = 0;
    public function __construct() {
    }
    public function gettipoCount() {
        return $this->tipoCount;
    }
    private function settipoCount($newCount) {
        $this->tipoCount = $newCount;
    }
    public function gettipo($tipoNumberToGet) {
        if ( (is_numeric($tipoNumberToGet)) &&
            ($tipoNumberToGet <= $this->gettipoCount())) {
            return $this->tipo[$tipoNumberToGet];
        } else {
            return NULL;
        }
    }
    public function addtipo(tipoRefeicao $tipo_in) {
        $this->settipoCount($this->gettipoCount() + 1);
        $this->tipo[$this->gettipoCount()] = $tipo_in;
        return $this->gettipoCount();
    }
    public function removetipo(tipoRefeicao $tipo_in) {
        $counter = 0;
        while (++$counter <= $this->gettipoCount()) {
            if ($tipo_in->getAuthorAndTitle() ==
                $this->tipo[$counter]->getAuthorAndTitle())
            {
                for ($x = $counter; $x < $this->gettipoCount(); $x++) {
                    $this->tipo[$x] = $this->tipo[$x + 1];
                }
                $this->settipoCount($this->gettipoCount() - 1);
            }
        }
        return $this->gettipoCount();
    }
}