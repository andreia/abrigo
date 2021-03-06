<?php

/**
 * BaseMotivoDesligamento
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $nome
 * @property integer $ordem
 * @property Doctrine_Collection $AcolhidoMotivoDesligamento
 * 
 * @method string              getNome()                       Returns the current record's "nome" value
 * @method integer             getOrdem()                      Returns the current record's "ordem" value
 * @method Doctrine_Collection getAcolhidoMotivoDesligamento() Returns the current record's "AcolhidoMotivoDesligamento" collection
 * @method MotivoDesligamento  setNome()                       Sets the current record's "nome" value
 * @method MotivoDesligamento  setOrdem()                      Sets the current record's "ordem" value
 * @method MotivoDesligamento  setAcolhidoMotivoDesligamento() Sets the current record's "AcolhidoMotivoDesligamento" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMotivoDesligamento extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('motivo_desligamento');
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
        $this->hasMany('Acolhido as AcolhidoMotivoDesligamento', array(
             'local' => 'id',
             'foreign' => 'motivoDesligamento_id'));
    }
}