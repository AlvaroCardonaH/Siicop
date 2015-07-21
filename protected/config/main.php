<?php

// Set the path of Bootstrap to be the root of the project.
//Yii::setPathOfAlias('bootstrap', realpath(dirname(__FILE__).'/../../../'));

$config = array(
	'basePath'=>realpath(dirname(__FILE__).'/..'),
	'name'=>'Siicop',
	'language'=>'es', // Este es el lenguaje en el que querés que muestre las cosas
        'sourceLanguage'=>'en',
        //'defaultController'=>'programacionflotas',
        'charset'=>'utf-8',

	'preload'=>array(
		'bootstrap',
		'log',
	),
	
	'aliases' => array(
        'audit' => 'application.vendor.cornernote.yii-audit-module.audit',
    ),

	'import'=>array(
		'application.models.*',
		'application.components.*',          
        'application.modules.importcsv.models.*',
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12051111',
			'ipFilters'=>false,
			'generatorPaths'=>array('bootstrap.gii'),
		),
                'importcsv'=>array(
                    'path'=>'upload/', // path to folder for saving csv file and file with import params
                ),
                'programacionflotas',
				

	),

	'components'=>array(
		'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap',
			'responsiveCss'=>true,
		),
        	'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=copservir_turnos',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '12051111',
			'charset' => 'utf8',
			
		),
		'errorHandler'=>array(
			'errorAction'=>'site/error',
		),
		'fb'=>array(
			'class'=>'ext.facebook.components.FacebookConnect',
			'appID'=>'106265262835735',
			'appNamespace'=>'yii-bootstrap',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		'urlManager'=>array(
			'showScriptName'=>false,
			'urlFormat'=>'path',
			//'urlSuffix'=>'.html',
			'rules'=>array(
				'index'=>'site/index',
				'setup'=>'site/setup',
			),
		),
	),

	// Application-level parameters
	'params'=>array(
		'appTitle'=>'Programacion de turnos',
		'appDescription'=>'Yii-Bootstrap is an extension for Yii that provides a wide range of server-side widgets that allow you to easily use Bootstrap with Yii.',
	),
);

return file_exists(dirname(__FILE__).'/local.php')
		? CMap::mergeArray($config, require('local.php'))
		: $config;
