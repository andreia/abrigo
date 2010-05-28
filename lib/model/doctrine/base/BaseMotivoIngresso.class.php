<?php

/**
 * BaseMotivoIngresso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property integer $ordem
 * @property Doctrine_Collection $AcolhidoMotivoIngresso
 * 
 * @method string              getNome()                   Returns the current record's "nome" value
 * @method integer             getOrdem()                  Returns the current record's "ordem" value
 * @method Doctrine_Collection getAcolhidoMotivoIngresso() Returns the current record's "AcolhidoMotivoIngresso" collection
 * @method MotivoIngresso      setNome()                   Sets the current record's "nome" value
 * @method MotivoIngresso      setOrdem()                  Sets the current record's "ordem" value
 * @method MotivoIngresso      setAcolhidoMotivoIngresso() Sets the current record's "AcolhidoMotivoIngresso" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMotivoIngresso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('motivo_ingresso');
        $this->hasColumn('nome', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('ordem', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Acolhido as AcolhidoMotivoIngresso', array(
             'local' => 'id',
             'foreign' => 'motivoIngresso_id'));
    }
}