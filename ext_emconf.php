<?php

/*********************************************************************
 * Extension configuration file for ext "filemetadata".
 *********************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Advanced file metadata',
	'description' => 'Add advanced metadata to File.',
	'category' => 'misc',
	'state' => 'stable',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '6.3.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.3.0-6.3.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);
