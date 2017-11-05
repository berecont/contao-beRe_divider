<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Divider
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'dividerClass' => 'system/modules/beRe_divider/classes/dividerClass.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_beReDivider' => 'system/modules/beRe_divider/templates',
));
