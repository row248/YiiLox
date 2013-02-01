<?php

return array(
    'name' => 'My site',

    'import' => array(
        'application.models.*',
        'application.components.*'
    ),

    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '12345'
        ),
    ),

    'components' => array(

        'db' => array(
            'connectionString' => 'sqlite:protected/data/blog.db',
            'tablePrefix' => 'tbl_',
        ),
    ),

    'params' => require dirname(__FILE__) . '/params.php',

);