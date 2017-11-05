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


/**
 * Table tl_content
 */
$strName = 'tl_content';

/* Palettes */
$GLOBALS['TL_DCA'][$strName]['palettes']['beRe_trennlinie'] = '{type_legend},type;{beRe_trennlinie},beRe_divider_type;{template_legend:hide},ce_beReDivider,customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,useHomeDir,cssID,space;{invisible_legend:hide},invisible,start,stop;';

/* Fields */
$GLOBALS['TL_DCA'][$strName]['fields']['beRe_divider_type'] = array	(
			'label'                   => &$GLOBALS['TL_LANG'][$strName]['beRe_divider_type'],
			'exclude'                 => true,
			'default'                 => 'divider01',
			'inputType'               => 'select',
			'options'                 => array('divider01', 'divider02', 'divider03', 'divider04'),
			'reference'               => &$GLOBALS['TL_LANG'][$strName],
			'eval'                    => array('tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		);

