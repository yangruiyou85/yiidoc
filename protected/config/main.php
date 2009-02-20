<?php

Yii::setPathOfAlias('webroot',dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..');
// This is the main application configuration. Any writable
// application properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'The Yii Documentation Project',
	'defaultController'=>'guide',
	'import'=>array(
		'application.components.*',
	),
);