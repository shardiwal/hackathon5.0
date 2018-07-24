<?php

Yii::setPathOfAlias('LC', dirname(__FILE__).'/../extensions/web/CList');

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'theme' => 'ecare',
    'name' => 'GEO Mapping System',
    'import' => array(
        'application.models.*',
        'application.components.*'
    ),
    'preload' => array(
        'chartjs'
    ),
    'modules' => array(
		'Install',
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => array('ecare'),
            'ipFilters' => array(
                '127.0.0.1',
                '::1'
            )
        )
    ),
    'components' => array(
        'widgetFactory' => array(
            'widgets' => array(
                'YiiSelectize' => array(
                    'defaultOptions' => array(
                        'create' => false,
                    ),
                ),
            ),
        ),
        'user' => array(
            'allowAutoLogin' => true,
            'class' => 'WebUser',
        ),
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=geomap',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8'
        ),
        'errorHandler' => array(
            'errorAction' => 'site/error'
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning'
                ),
                array(
                    'class' => 'CWebLogRoute'
                )
            )
        ),
        'ePdf' => array(
            'class' => 'ext.yii-pdf.EYiiPdf',
            'params' => array(
                'mpdf'     => array(
                    'librarySourcePath' => 'application.vendor.mpdf.*',
                    'constants'         => array(
                        '_MPDF_TEMP_PATH' => Yii::getPathOfAlias('application.runtime'),
                    ),
                    'class'  => 'mpdf',
                    'defaultParams'     => array( 
                        'mode'      => 'utf-8',
                        'format'    => 'A4-L',
                        'mgl'         => 5,
                        'mgr'         => 5,
                        'mgt'         => 5,
                        'mgb'         => 5,
                        'mgh'         => 5,
                        'mgf'         => 12,
                    )
                ),
                'HTML2PDF' => array(
                    'librarySourcePath' => 'application.vendors.html2pdf.*',
                    'classFile'         => 'html2pdf.class.php', // For adding to Yii::$classMap
                    /*'defaultParams'     => array( // More info: http://wiki.spipu.net/doku.php?id=html2pdf:en:v4:accueil
                        'orientation' => 'P', // landscape or portrait orientation
                        'format'      => 'A4', // format A4, A5, ...
                        'language'    => 'en', // language: fr, en, it ...
                        'unicode'     => true, // TRUE means clustering the input text IS unicode (default = true)
                        'encoding'    => 'UTF-8', // charset encoding; Default is UTF-8
                        'marges'      => array(5, 5, 5, 8), // margins by default, in order (left, top, right, bottom)
                    )*/
                )
            )
        ),
    ),
    
    'params' => array(
        'company' => array(
            'name' => 'eCare SofTech Pvt. Ltd.',
            'website' => 'http://ecaresoftech.com',
            'contact_number' => '+918010766565'
        ),
        'adminEmail' => 'rakesh.shardiwal@gmail.com',
        'listPerPage' => '30'
    )
);
