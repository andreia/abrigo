<?php

/**
 * NivelEscolaridade
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    abrigo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class NivelEscolaridade extends BaseNivelEscolaridade
{
	public function __toString()
	{
		return sprintf('%s - %s', $this->getNome(), $this->getGrau());
	}


}
