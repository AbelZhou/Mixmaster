<?php
/**
 * 
 * @author Abel
 * email:abel.zhou@hotmail.com
 * 2015-1-17
 * UTF-8
 */
class Controller_Base extends Yaf_Controller_Abstract{
	
	/**
	 * 初始化Controller
	 */
	function init(){
// 		var_dump(ROOT_PATH.'/../Mixmaster/Bootstrap.php');exit;
		include ROOT_PATH.'/../Mixmaster/Bootstrap.php';
	}
}