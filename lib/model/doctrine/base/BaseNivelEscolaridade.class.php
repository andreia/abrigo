<?php

/**
 * BaseNivelEscolaridade
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property string $grau
 * @property integer $ordem
 * @property Doctrine_Collection $PadrinhoEscolaridade
 * @property Doctrine_Collection $VoluntarioEscolaridade
 * @property Doctrine_Collection $AcolhidoEscolaridade
 * 
 * @method string              getNome()                   Returns the current record's "nome" value
 * @method string              getGrau()                   Returns the current record's "grau" value
 * @method integer             getOrdem()                  Returns the current record's "ordem" value
 * @method Doctrine_Collection getPadrinhoEscolaridade()   Returns the current record's "PadrinhoEscolaridade" collection
 * @method Doctrine_Collection getVoluntarioEscolaridade() Returns the current record's "VoluntarioEscolaridade" collection
 * @method Doctrine_Collection getAcolhidoEscolaridade()   Returns the current record's "AcolhidoEscolaridade" collection
 * @method NivelEscolaridade   setNome()                   Sets the current record's "nome" value
 * @method NivelEscolaridade   setGrau()                   Sets the current record's "grau" value
 * @method NivelEscolaridade   setOrdem()                  Sets the current record's "ordem" value
 * @method NivelEscolaridade   setPadrinhoEscolaridade()   Sets the current record's "PadrinhoEscolaridade" collection
 * @method NivelEscolaridade   setVoluntarioEscolaridade() Sets the current record's "VoluntarioEscolaridade" collection
 * @method NivelEscolaridade   setAcolhidoEscolaridade()   Sets the current record's "AcolhidoEscolaridade" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseNivelEscolaridade extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('nivel_escolaridade');
        $this->hasColumn('nome', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('grau', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('ordem', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Padrinho as PadrinhoEscolaridade', array(
             'local' => 'id',
             'foreign' => 'escolaridade_id'));

        $this->hasMany('Voluntario as VoluntarioEscolaridade', array(
             'local' => 'id',
             'foreign' => 'escolaridade_id'));

        $this->hasMany('EscolaridadeAcolhido as AcolhidoEscolaridade', array(
             'local' => 'id',
             'foreign' => 'escolaridade_id'));
    }
}