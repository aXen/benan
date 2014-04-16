<?php


// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// Define a path alias for the Bootstrap extension as it's used internally.
// In this example we assume that you unzipped the extension under protected/extensions.
// 配置一个别名 使得可以用bootstrap访问到该扩展的存放路径  
Yii :: setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
Yii :: setPathOfAlias('benan', dirname(__FILE__) . '/../extensions/benan');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'theme' => 'bootstrap', // requires you to copy the theme under your themes directory
    'language' => 'zh_cn',
    // 'name' => Yii :: t('app', 'name'),
    'name' => '本安亚大',

    // preloading 'log' component
    'preload' => array(
        'log'
    ),

    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*'
    ),

    'modules' => array(
        'admin',
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'aXen',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array(
                '127.0.0.1',
                '::1'
            ),
            'generatorPaths' => array(
                'bootstrap.gii',
                'benan.gii'  // 本安代码模板生成器
            )
        )
    ),

    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => '../home/login',
        ),
        // uncomment the following to enable URLs in path-format
        /*
        'urlManager'=>array(
            'urlFormat'=>'path',
            'rules'=>array(
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        */
        'urlManager' => array(
            'urlFormat' => 'path',  // 不显示r，以path方式显示url
            'showScriptName'=>false,//注意false不要用引号括上
//            'urlSuffix'=>'.php',
            'rules' => array(
                'products' => 'site/products',
                'news/<id:\d+>\.html' => 'site/viewnews',
                'product/<id:\d+>\.html' => 'site/viewproduct',
                'category/<id:\d+>\.html' => 'site/viewcategory',
                // REST patterns
                array('api/list', 'pattern' => 'api/<model:\w+>', 'verb' => 'GET'),
                array('api/view', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'GET'),
                array('api/update', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'PUT'),
                array('api/delete', 'pattern' => 'api/<model:\w+>/<id:\d+>', 'verb' => 'DELETE'),
                array('api/create', 'pattern' => 'api/<model:\w+>', 'verb' => 'POST'),
                // Other controllers
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            ),
        ),
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/benan.db',
            // 性能监控
            'enableProfiling' => true,
            'enableParamLogging' => true
        ),
        // uncomment the following to use a MySQL database
        /*
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=firstyii',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        */
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error'
        ),
        'log' => array(
            'class' => 'CLogRouter',
            // 日志路由，可有多个 路由终点
            'routes' => array(
                /*
                在 Yii 中，有下列几种日志路由可用：
                CDbLogRoute: 将信息保存到数据库的表中。
                CEmailLogRoute: 发送信息到指定的 Email 地址。
                CFileLogRoute: 保存信息到应用程序 runtime 目录中的一个文件中。
                CWebLogRoute: 将 信息 显示在当前页面的底部。
                CProfileLogRoute: 在页面的底部显示概述（profiling）信息。
                */
                // basic（记录在文件中）
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning'
                ),
                // uncomment the following to show log messages on web pages
                /*
                    // 显示在web页面中
                array (
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace', //级别为trace
                    'categories' => 'system.db.*' //只显示关于数据库信息,包括数据库连接,数据库执行语句
                )
                */
                // yii-debug-toolbar(调式工具栏)
                array(
                    'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
                    'ipFilters' => array(
                        '127.0.0.1',
                        '192.168.1.215'
                    )
                )
            )
        ),
        // ...
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap'
        )
    ),

    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'webmaster@example.com'
    )
);