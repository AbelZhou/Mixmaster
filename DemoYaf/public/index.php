<?php
/**
 * 
 * @author Abel
 * email:abel.zhou@hotmail.com
 * 2015-1-17
 * UTF-8
 */
//设置时区
date_default_timezone_set('Asia/Shanghai');

//定义ROOTPATH
define("ROOT_PATH",  realpath(dirname(__FILE__) . '/..'));

define("APP_PATH", ROOT_PATH."/application");
$application = new Yaf_Application( ROOT_PATH . "/conf/application.ini");
$application->bootstrap()->run();