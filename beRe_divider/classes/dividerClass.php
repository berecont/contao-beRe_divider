<?php

/**
 * Contao Open Source CMS
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package   dividers
 * @author    Bernhard Renner
 * @license   GPL
 * @copyright Bernhard Renner 2017
 */


class dividerClass extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_beReDivider';

	/**
	 * Compile the content element
	 */
	protected function compile()
	{
		if (TL_MODE == 'BE') {
			$this->genBeOutput();
		} else {
			$this->genFeOutput();
		}
	}

	/**
	 * Generate the content element backend
	 */
	private function genBeOutput()
	{
		$this->strTemplate			= 'be_wildcard';
		$this->Template				= new \BackendTemplate($this->strTemplate);
		$this->Template->title		= $this->headline;
		$this->Template->wildcard	= "### dividerClass ###";
	}

	/**
	 * Generate the content element frontend
	 */
	 private function genFeOutput()
	 {
		 if ($this->beRe_divider_type != '') {
			 $this->Template->arrDivider = deserialize($this->beRe_divider_type, true);
		 }
	 }
}
