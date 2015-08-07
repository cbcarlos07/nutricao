<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 07/08/2015
 * Time: 14:48
 */

class Tipo {
    private $id;
    private $descricao;

    function setId($id){
      $this->id = $id;
    }

    function getId(){
        return $this->id
    }

}