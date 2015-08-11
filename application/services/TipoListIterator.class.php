<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 10/08/2015
 * Time: 08:52
 */
class TipoListIterator {
    protected $tipoList;
    protected $currentTipo = 0;

    public function __construct(tipoRefList $tipoList_in) {
        $this->tipoList = $tipoList_in;
    }
    public function getCurrenttipo() {
        if (($this->currentTipo > 0) &&
            ($this->tipoList->gettipoCount() >= $this->currentTipo)) {
            return $this->tipoList->getTipo($this->currentTipo);
        }
    }
    public function getNextTipo() {
        if ($this->hasNextTipo()) {
            return $this->tipoList->getTipo(++$this->currentTipo);
        } else {
            return NULL;
        }
    }
    public function hasNextTipo() {
        if ($this->tipoList->getTipoCount() > $this->currentTipo) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}