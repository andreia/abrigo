<?php

/**
 * EntradasESaidasAcolhido form.
 *
 * @package    abrigo
 * @subpackage form
 * @author     Luiz Oliveira
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EntradasESaidasAcolhidoForm extends BaseEntradasESaidasAcolhidoForm
{
  public function configure()
  {

    @$acolhido = $_GET['acolhido_id'];
        

    $choicesPai[""] = "";
    $choicesMae[""] = "";
    $choicesResponsavel[""] = "";



    if (($acolhido) || (!$this->getObject()->isNew())) {
        if (!$acolhido) $acolhido = $this->getObject()->getAcolhidoId();
        $acolhido = Doctrine::getTable('Acolhido')->findOneById($acolhido);

    

        $this->setDefault('acolhido_id', $acolhido->getId());

        //Veirificando autorização para visita do Pai
        $pai = $acolhido->getPai();
        if ($pai->getAutorizacaoVisita() == "Sim") {
            $choicesPai[$pai->getId()] = $pai->getNome();
        } else $choicesPai[""] = "Pai não autorizado a visitação ou não cadastrado";


        //Veirificando autorização para visita da Mãe
        $mae = $acolhido->getMae();
        if ($mae->getAutorizacaoVisita() == "Sim") {
            $choicesMae[$mae->getId()] = $mae->getNome();
        } else $choicesMae[""] = "Mãe não autorizada a visitação ou não cadastrada";

        //Veirificando autorização para visita do Responsável
        $responsavel = $acolhido->getResponsavel();
        if ($responsavel->getAutorizacaoVisita() == "Sim") {
            $choicesResponsavel[$responsavel->getId()] = $responsavel->getNome();
        } else $choicesResponsavel[""] = "Responsável não autorizado a visitação ou não cadastrado";


        $this->widgetSchema['pai_id'] = new sfWidgetFormChoice(array('choices' => $choicesPai));
        $this->widgetSchema['mae_id'] = new sfWidgetFormChoice(array('choices' => $choicesMae));
        $this->widgetSchema['responsavel_id'] = new sfWidgetFormChoice(array('choices' => $choicesResponsavel));

        
    
        unset($acolhido);
    }

    
    
    

  }
}
