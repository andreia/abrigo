<?php

/**
 * BaseEscolaridadeAcolhido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $acolhido_id
 * @property integer $escolaridade_id
 * @property string $nomeEscola
 * @property date $dataConclusao
 * @property Acolhido $Acolhido
 * @property NivelEscolaridade $NivelEscolaridade
 * 
 * @method integer              getAcolhidoId()        Returns the current record's "acolhido_id" value
 * @method integer              getEscolaridadeId()    Returns the current record's "escolaridade_id" value
 * @method string               getNomeEscola()        Returns the current record's "nomeEscola" value
 * @method date                 getDataConclusao()     Returns the current record's "dataConclusao" value
 * @method Acolhido             getAcolhido()          Returns the current record's "Acolhido" value
 * @method NivelEscolaridade    getNivelEscolaridade() Returns the current record's "NivelEscolaridade" value
 * @method EscolaridadeAcolhido setAcolhidoId()        Sets the current record's "acolhido_id" value
 * @method EscolaridadeAcolhido setEscolaridadeId()    Sets the current record's "escolaridade_id" value
 * @method EscolaridadeAcolhido setNomeEscola()        Sets the current record's "nomeEscola" value
 * @method EscolaridadeAcolhido setDataConclusao()     Sets the current record's "dataConclusao" value
 * @method EscolaridadeAcolhido setAcolhido()          Sets the current record's "Acolhido" value
 * @method EscolaridadeAcolhido setNivelEscolaridade() Sets the current record's "NivelEscolaridade" value
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEscolaridadeAcolhido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('escolaridade_acolhido');
        $this->hasColumn('acolhido_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('escolaridade_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('nomeEscola', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('dataConclusao', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Acolhido', array(
             'local' => 'acolhido_id',
             'foreign' => 'id'));

        $this->hasOne('NivelEscolaridade', array(
             'local' => 'escolaridade_id',
             'foreign' => 'id'));
    }
}