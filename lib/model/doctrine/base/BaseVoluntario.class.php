<?php

/**
 * BaseVoluntario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $endLogradouro
 * @property string $endNumero
 * @property string $endComplemento
 * @property string $endBairro
 * @property string $endCidade
 * @property enum $endEstado
 * @property string $endCep
 * @property string $endProfLogradouro
 * @property string $endProfNumero
 * @property string $endProfComplemento
 * @property string $endProfBairro
 * @property string $endProfCidade
 * @property enum $endProfEstado
 * @property string $endProfCep
 * @property string $contatos
 * @property integer $escolaridade_id
 * @property string $profissao
 * @property string $composicaoFamiliar
 * @property string $preferenciaReligiosa
 * @property string $conhecimentoPrograma
 * @property string $disponibilidadeHorario
 * @property string $atividadeDesenvolvida
 * @property string $observacao
 * @property date $dataInscricao
 * @property string $tecnicoResponsavel
 * @property NivelEscolaridade $NivelEscolaridade
 * @property Doctrine_Collection $EntradasESaidasVoluntario
 * 
 * @method string              getEndLogradouro()             Returns the current record's "endLogradouro" value
 * @method string              getEndNumero()                 Returns the current record's "endNumero" value
 * @method string              getEndComplemento()            Returns the current record's "endComplemento" value
 * @method string              getEndBairro()                 Returns the current record's "endBairro" value
 * @method string              getEndCidade()                 Returns the current record's "endCidade" value
 * @method enum                getEndEstado()                 Returns the current record's "endEstado" value
 * @method string              getEndCep()                    Returns the current record's "endCep" value
 * @method string              getEndProfLogradouro()         Returns the current record's "endProfLogradouro" value
 * @method string              getEndProfNumero()             Returns the current record's "endProfNumero" value
 * @method string              getEndProfComplemento()        Returns the current record's "endProfComplemento" value
 * @method string              getEndProfBairro()             Returns the current record's "endProfBairro" value
 * @method string              getEndProfCidade()             Returns the current record's "endProfCidade" value
 * @method enum                getEndProfEstado()             Returns the current record's "endProfEstado" value
 * @method string              getEndProfCep()                Returns the current record's "endProfCep" value
 * @method string              getContatos()                  Returns the current record's "contatos" value
 * @method integer             getEscolaridadeId()            Returns the current record's "escolaridade_id" value
 * @method string              getProfissao()                 Returns the current record's "profissao" value
 * @method string              getComposicaoFamiliar()        Returns the current record's "composicaoFamiliar" value
 * @method string              getPreferenciaReligiosa()      Returns the current record's "preferenciaReligiosa" value
 * @method string              getConhecimentoPrograma()      Returns the current record's "conhecimentoPrograma" value
 * @method string              getDisponibilidadeHorario()    Returns the current record's "disponibilidadeHorario" value
 * @method string              getAtividadeDesenvolvida()     Returns the current record's "atividadeDesenvolvida" value
 * @method string              getObservacao()                Returns the current record's "observacao" value
 * @method date                getDataInscricao()             Returns the current record's "dataInscricao" value
 * @method string              getTecnicoResponsavel()        Returns the current record's "tecnicoResponsavel" value
 * @method NivelEscolaridade   getNivelEscolaridade()         Returns the current record's "NivelEscolaridade" value
 * @method Doctrine_Collection getEntradasESaidasVoluntario() Returns the current record's "EntradasESaidasVoluntario" collection
 * @method Voluntario          setEndLogradouro()             Sets the current record's "endLogradouro" value
 * @method Voluntario          setEndNumero()                 Sets the current record's "endNumero" value
 * @method Voluntario          setEndComplemento()            Sets the current record's "endComplemento" value
 * @method Voluntario          setEndBairro()                 Sets the current record's "endBairro" value
 * @method Voluntario          setEndCidade()                 Sets the current record's "endCidade" value
 * @method Voluntario          setEndEstado()                 Sets the current record's "endEstado" value
 * @method Voluntario          setEndCep()                    Sets the current record's "endCep" value
 * @method Voluntario          setEndProfLogradouro()         Sets the current record's "endProfLogradouro" value
 * @method Voluntario          setEndProfNumero()             Sets the current record's "endProfNumero" value
 * @method Voluntario          setEndProfComplemento()        Sets the current record's "endProfComplemento" value
 * @method Voluntario          setEndProfBairro()             Sets the current record's "endProfBairro" value
 * @method Voluntario          setEndProfCidade()             Sets the current record's "endProfCidade" value
 * @method Voluntario          setEndProfEstado()             Sets the current record's "endProfEstado" value
 * @method Voluntario          setEndProfCep()                Sets the current record's "endProfCep" value
 * @method Voluntario          setContatos()                  Sets the current record's "contatos" value
 * @method Voluntario          setEscolaridadeId()            Sets the current record's "escolaridade_id" value
 * @method Voluntario          setProfissao()                 Sets the current record's "profissao" value
 * @method Voluntario          setComposicaoFamiliar()        Sets the current record's "composicaoFamiliar" value
 * @method Voluntario          setPreferenciaReligiosa()      Sets the current record's "preferenciaReligiosa" value
 * @method Voluntario          setConhecimentoPrograma()      Sets the current record's "conhecimentoPrograma" value
 * @method Voluntario          setDisponibilidadeHorario()    Sets the current record's "disponibilidadeHorario" value
 * @method Voluntario          setAtividadeDesenvolvida()     Sets the current record's "atividadeDesenvolvida" value
 * @method Voluntario          setObservacao()                Sets the current record's "observacao" value
 * @method Voluntario          setDataInscricao()             Sets the current record's "dataInscricao" value
 * @method Voluntario          setTecnicoResponsavel()        Sets the current record's "tecnicoResponsavel" value
 * @method Voluntario          setNivelEscolaridade()         Sets the current record's "NivelEscolaridade" value
 * @method Voluntario          setEntradasESaidasVoluntario() Sets the current record's "EntradasESaidasVoluntario" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVoluntario extends Pessoa
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('voluntario');
        $this->hasColumn('endLogradouro', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('endNumero', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('endComplemento', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('endBairro', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('endCidade', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('endEstado', 'enum', 2, array(
             'type' => 'enum',
             'length' => 2,
             'values' => 
             array(
              0 => 'AC',
              1 => 'AL',
              2 => 'AP',
              3 => 'AM',
              4 => 'BA',
              5 => 'CE',
              6 => 'DF',
              7 => 'GO',
              8 => 'ES',
              9 => 'MA',
              10 => 'MT',
              11 => 'MS',
              12 => 'MG',
              13 => 'PA',
              14 => 'PB',
              15 => 'PR',
              16 => 'PE',
              17 => 'PI',
              18 => 'RJ',
              19 => 'RN',
              20 => 'RS',
              21 => 'RO',
              22 => 'RR',
              23 => 'SP',
              24 => 'SC',
              25 => 'SE',
              26 => 'TO',
             ),
             'default' => 'RJ',
             'notnull' => true,
             ));
        $this->hasColumn('endCep', 'string', 9, array(
             'type' => 'string',
             'length' => 9,
             ));
        $this->hasColumn('endProfLogradouro', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('endProfNumero', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('endProfComplemento', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('endProfBairro', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('endProfCidade', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('endProfEstado', 'enum', 2, array(
             'type' => 'enum',
             'length' => 2,
             'values' => 
             array(
              0 => 'AC',
              1 => 'AL',
              2 => 'AP',
              3 => 'AM',
              4 => 'BA',
              5 => 'CE',
              6 => 'DF',
              7 => 'GO',
              8 => 'ES',
              9 => 'MA',
              10 => 'MT',
              11 => 'MS',
              12 => 'MG',
              13 => 'PA',
              14 => 'PB',
              15 => 'PR',
              16 => 'PE',
              17 => 'PI',
              18 => 'RJ',
              19 => 'RN',
              20 => 'RS',
              21 => 'RO',
              22 => 'RR',
              23 => 'SP',
              24 => 'SC',
              25 => 'SE',
              26 => 'TO',
             ),
             'default' => 'RJ',
             'notnull' => true,
             ));
        $this->hasColumn('endProfCep', 'string', 9, array(
             'type' => 'string',
             'length' => 9,
             ));
        $this->hasColumn('contatos', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('escolaridade_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('profissao', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('composicaoFamiliar', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('preferenciaReligiosa', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('conhecimentoPrograma', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('disponibilidadeHorario', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('atividadeDesenvolvida', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('observacao', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('dataInscricao', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('tecnicoResponsavel', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('NivelEscolaridade', array(
             'local' => 'escolaridade_id',
             'foreign' => 'id'));

        $this->hasMany('EntradasESaidasAcolhido as EntradasESaidasVoluntario', array(
             'local' => 'id',
             'foreign' => 'voluntario_id'));
    }
}