<?php

/**
 * Pessoa
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Pessoa extends BasePessoa
{

    public function __toString() {

        return $this->getNome();

    }

}