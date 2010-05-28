<?php

/**
 * BaseEntidadesPassadasAcolhido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $acolhido_id
 * @property string $nomeEntidade
 * @property date $dataEntrada
 * @property date $dataSaida
 * @property Acolhido $Acolhido
 * 
 * @method integer                   getAcolhidoId()   Returns the current record's "acolhido_id" value
 * @method string                    getNomeEntidade() Returns the current record's "nomeEntidade" value
 * @method date                      getDataEntrada()  Returns the current record's "dataEntrada" value
 * @method date                      getDataSaida()    Returns the current record's "dataSaida" value
 * @method Acolhido                  getAcolhido()     Returns the current record's "Acolhido" value
 * @method EntidadesPassadasAcolhido setAcolhidoId()   Sets the current record's "acolhido_id" value
 * @method EntidadesPassadasAcolhido setNomeEntidade() Sets the current record's "nomeEntidade" value
 * @method EntidadesPassadasAcolhido setDataEntrada()  Sets the current record's "dataEntrada" value
 * @method EntidadesPassadasAcolhido setDataSaida()    Sets the current record's "dataSaida" value
 * @method EntidadesPassadasAcolhido setAcolhido()     Sets the current record's "Acolhido" value
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEntidadesPassadasAcolhido extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('entidades_passadas_acolhido');
        $this->hasColumn('acolhido_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('nomeEntidade', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('dataEntrada', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('dataSaida', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Acolhido', array(
             'local' => 'acolhido_id',
             'foreign' => 'id'));
    }
}