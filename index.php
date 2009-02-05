<?php
define('YII_DEBUG',true);
$webRoot=dirname(__FILE__);
require_once($webRoot.'/framework/yii.php');
$configFile=$webRoot.'/protected/config/main.php';
Yii::createWebApplication($configFile)->run();
