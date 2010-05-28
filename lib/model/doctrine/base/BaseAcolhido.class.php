<?php

/**
 * BaseAcolhido
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property date $dataIngresso
 * @property integer $motivoIngresso_id
 * @property string $processosRelacionados
 * @property string $zona
 * @property string $distrito
 * @property string $livro
 * @property string $folha
 * @property string $termo
 * @property string $documentoIdentidade
 * @property string $cpf
 * @property string $titulo
 * @property string $carteiraTrabalho
 * @property enum $possuiDeficiencia
 * @property string $descricaoDeficiencia
 * @property enum $usoMedicamentoControlado
 * @property string $descricaoMedicamentoControlado
 * @property integer $mae_id
 * @property integer $pai_id
 * @property integer $responsavel_id
 * @property integer $responsavelGrauParentesco_id
 * @property string $sumarioSocial
 * @property string $sumarioPsicologico
 * @property date $dataDesligamento
 * @property integer $motivoDesligamento_id
 * @property MotivoIngresso $MotivoIngresso
 * @property MotivoDesligamento $MotivoDesligamento
 * @property Pai $Pai
 * @property Mae $Mae
 * @property Responsavel $Responsavel
 * @property GrauParentescoResponsavel $GrauParentescoResponsavel
 * @property Doctrine_Collection $EscolaridadeAcolhido
 * @property Doctrine_Collection $CursoExternoAcolhido
 * @property Doctrine_Collection $AcolhidoEntidadesPassadas
 * @property Doctrine_Collection $EntradasESaidasAcolhido
 * @property Doctrine_Collection $ApadrinhamentoAcolhido
 * 
 * @method date                      getDataIngresso()                   Returns the current record's "dataIngresso" value
 * @method integer                   getMotivoIngressoId()               Returns the current record's "motivoIngresso_id" value
 * @method string                    getProcessosRelacionados()          Returns the current record's "processosRelacionados" value
 * @method string                    getZona()                           Returns the current record's "zona" value
 * @method string                    getDistrito()                       Returns the current record's "distrito" value
 * @method string                    getLivro()                          Returns the current record's "livro" value
 * @method string                    getFolha()                          Returns the current record's "folha" value
 * @method string                    getTermo()                          Returns the current record's "termo" value
 * @method string                    getDocumentoIdentidade()            Returns the current record's "documentoIdentidade" value
 * @method string                    getCpf()                            Returns the current record's "cpf" value
 * @method string                    getTitulo()                         Returns the current record's "titulo" value
 * @method string                    getCarteiraTrabalho()               Returns the current record's "carteiraTrabalho" value
 * @method enum                      getPossuiDeficiencia()              Returns the current record's "possuiDeficiencia" value
 * @method string                    getDescricaoDeficiencia()           Returns the current record's "descricaoDeficiencia" value
 * @method enum                      getUsoMedicamentoControlado()       Returns the current record's "usoMedicamentoControlado" value
 * @method string                    getDescricaoMedicamentoControlado() Returns the current record's "descricaoMedicamentoControlado" value
 * @method integer                   getMaeId()                          Returns the current record's "mae_id" value
 * @method integer                   getPaiId()                          Returns the current record's "pai_id" value
 * @method integer                   getResponsavelId()                  Returns the current record's "responsavel_id" value
 * @method integer                   getResponsavelGrauParentescoId()    Returns the current record's "responsavelGrauParentesco_id" value
 * @method string                    getSumarioSocial()                  Returns the current record's "sumarioSocial" value
 * @method string                    getSumarioPsicologico()             Returns the current record's "sumarioPsicologico" value
 * @method date                      getDataDesligamento()               Returns the current record's "dataDesligamento" value
 * @method integer                   getMotivoDesligamentoId()           Returns the current record's "motivoDesligamento_id" value
 * @method MotivoIngresso            getMotivoIngresso()                 Returns the current record's "MotivoIngresso" value
 * @method MotivoDesligamento        getMotivoDesligamento()             Returns the current record's "MotivoDesligamento" value
 * @method Pai                       getPai()                            Returns the current record's "Pai" value
 * @method Mae                       getMae()                            Returns the current record's "Mae" value
 * @method Responsavel               getResponsavel()                    Returns the current record's "Responsavel" value
 * @method GrauParentescoResponsavel getGrauParentescoResponsavel()      Returns the current record's "GrauParentescoResponsavel" value
 * @method Doctrine_Collection       getEscolaridadeAcolhido()           Returns the current record's "EscolaridadeAcolhido" collection
 * @method Doctrine_Collection       getCursoExternoAcolhido()           Returns the current record's "CursoExternoAcolhido" collection
 * @method Doctrine_Collection       getAcolhidoEntidadesPassadas()      Returns the current record's "AcolhidoEntidadesPassadas" collection
 * @method Doctrine_Collection       getEntradasESaidasAcolhido()        Returns the current record's "EntradasESaidasAcolhido" collection
 * @method Doctrine_Collection       getApadrinhamentoAcolhido()         Returns the current record's "ApadrinhamentoAcolhido" collection
 * @method Acolhido                  setDataIngresso()                   Sets the current record's "dataIngresso" value
 * @method Acolhido                  setMotivoIngressoId()               Sets the current record's "motivoIngresso_id" value
 * @method Acolhido                  setProcessosRelacionados()          Sets the current record's "processosRelacionados" value
 * @method Acolhido                  setZona()                           Sets the current record's "zona" value
 * @method Acolhido                  setDistrito()                       Sets the current record's "distrito" value
 * @method Acolhido                  setLivro()                          Sets the current record's "livro" value
 * @method Acolhido                  setFolha()                          Sets the current record's "folha" value
 * @method Acolhido                  setTermo()                          Sets the current record's "termo" value
 * @method Acolhido                  setDocumentoIdentidade()            Sets the current record's "documentoIdentidade" value
 * @method Acolhido                  setCpf()                            Sets the current record's "cpf" value
 * @method Acolhido                  setTitulo()                         Sets the current record's "titulo" value
 * @method Acolhido                  setCarteiraTrabalho()               Sets the current record's "carteiraTrabalho" value
 * @method Acolhido                  setPossuiDeficiencia()              Sets the current record's "possuiDeficiencia" value
 * @method Acolhido                  setDescricaoDeficiencia()           Sets the current record's "descricaoDeficiencia" value
 * @method Acolhido                  setUsoMedicamentoControlado()       Sets the current record's "usoMedicamentoControlado" value
 * @method Acolhido                  setDescricaoMedicamentoControlado() Sets the current record's "descricaoMedicamentoControlado" value
 * @method Acolhido                  setMaeId()                          Sets the current record's "mae_id" value
 * @method Acolhido                  setPaiId()                          Sets the current record's "pai_id" value
 * @method Acolhido                  setResponsavelId()                  Sets the current record's "responsavel_id" value
 * @method Acolhido                  setResponsavelGrauParentescoId()    Sets the current record's "responsavelGrauParentesco_id" value
 * @method Acolhido                  setSumarioSocial()                  Sets the current record's "sumarioSocial" value
 * @method Acolhido                  setSumarioPsicologico()             Sets the current record's "sumarioPsicologico" value
 * @method Acolhido                  setDataDesligamento()               Sets the current record's "dataDesligamento" value
 * @method Acolhido                  setMotivoDesligamentoId()           Sets the current record's "motivoDesligamento_id" value
 * @method Acolhido                  setMotivoIngresso()                 Sets the current record's "MotivoIngresso" value
 * @method Acolhido                  setMotivoDesligamento()             Sets the current record's "MotivoDesligamento" value
 * @method Acolhido                  setPai()                            Sets the current record's "Pai" value
 * @method Acolhido                  setMae()                            Sets the current record's "Mae" value
 * @method Acolhido                  setResponsavel()                    Sets the current record's "Responsavel" value
 * @method Acolhido                  setGrauParentescoResponsavel()      Sets the current record's "GrauParentescoResponsavel" value
 * @method Acolhido                  setEscolaridadeAcolhido()           Sets the current record's "EscolaridadeAcolhido" collection
 * @method Acolhido                  setCursoExternoAcolhido()           Sets the current record's "CursoExternoAcolhido" collection
 * @method Acolhido                  setAcolhidoEntidadesPassadas()      Sets the current record's "AcolhidoEntidadesPassadas" collection
 * @method Acolhido                  setEntradasESaidasAcolhido()        Sets the current record's "EntradasESaidasAcolhido" collection
 * @method Acolhido                  setApadrinhamentoAcolhido()         Sets the current record's "ApadrinhamentoAcolhido" collection
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Luiz Oliveira
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcolhido extends Pessoa
{
    public function setTableDefinition()
    {
        parent::setTableDefinition();
        $this->setTableName('acolhido');
        $this->hasColumn('dataIngresso', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('motivoIngresso_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('processosRelacionados', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('zona', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('distrito', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('livro', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('folha', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('termo', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('documentoIdentidade', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('cpf', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('titulo', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('carteiraTrabalho', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('possuiDeficiencia', 'enum', 3, array(
             'type' => 'enum',
             'length' => 3,
             'values' => 
             array(
              0 => 'Sim',
              1 => 'Não',
             ),
             'notnull' => true,
             'default' => 'Não',
             ));
        $this->hasColumn('descricaoDeficiencia', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('usoMedicamentoControlado', 'enum', 3, array(
             'type' => 'enum',
             'length' => 3,
             'values' => 
             array(
              0 => 'Sim',
              1 => 'Não',
             ),
             'notnull' => true,
             'default' => 'Não',
             ));
        $this->hasColumn('descricaoMedicamentoControlado', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('mae_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('pai_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('responsavel_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('responsavelGrauParentesco_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sumarioSocial', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('sumarioPsicologico', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             ));
        $this->hasColumn('dataDesligamento', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('motivoDesligamento_id', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MotivoIngresso', array(
             'local' => 'motivoIngresso_id',
             'foreign' => 'id'));

        $this->hasOne('MotivoDesligamento', array(
             'local' => 'motivoDesligamento_id',
             'foreign' => 'id'));

        $this->hasOne('Pai', array(
             'local' => 'pai_id',
             'foreign' => 'id'));

        $this->hasOne('Mae', array(
             'local' => 'mae_id',
             'foreign' => 'id'));

        $this->hasOne('Responsavel', array(
             'local' => 'responsavel_id',
             'foreign' => 'id'));

        $this->hasOne('GrauParentescoResponsavel', array(
             'local' => 'responsavelGrauParentesco_id',
             'foreign' => 'id'));

        $this->hasMany('EscolaridadeAcolhido', array(
             'local' => 'id',
             'foreign' => 'acolhido_id'));

        $this->hasMany('CursoExternoAcolhido', array(
             'local' => 'id',
             'foreign' => 'acolhido_id'));

        $this->hasMany('EntidadesPassadasAcolhido as AcolhidoEntidadesPassadas', array(
             'local' => 'id',
             'foreign' => 'acolhido_id'));

        $this->hasMany('EntradasESaidasAcolhido', array(
             'local' => 'id',
             'foreign' => 'acolhido_id'));

        $this->hasMany('Apadrinhamento as ApadrinhamentoAcolhido', array(
             'local' => 'id',
             'foreign' => 'acolhido_id'));
    }
}