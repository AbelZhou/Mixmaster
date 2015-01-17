<?php
/**
 * 
 * @author Abel
 * email:abel.zhou@hotmail.com
 * 2015-1-17
 * UTF-8
 */
function MIXMASTER_LOADCLASS($class_name) {
	if (empty ( $class_name )) {
		return false;
	}
	if (substr ( $class_name, 0, 9 ) != 'Mixmaster') {
		return false;
	}
	$class_name = substr($class_name, 11);

	$file_path = str_replace ( '_', '/', $class_name ) . '.php';
	require_once MIXMASTER_PATH . '/' . $file_path;
	return true;
}
spl_autoload_register ( 'MIXMASTER_LOADCLASS' );

class Mixmaster_Core_Loader{
	private static $obj = null;
	
	private function __construct(){
		if(!defined(MIXMASTER_PATH)){
			throw new Exception("Can not defined the MIXMASTER_PATH");
		}
	}
	
	/**
	 * 获得实例
	 * @throws Exception
	 * @return Mixmaster_Core_Loader
	 */
	public static function getInstance(){
		if(is_null(self::$obj)){
			self::$obj = new Mixmaster_Core_Loader();
		}
		return self::$obj;
	}
	
	/**
	 * 创建定向模型
	 * @param unknown $module
	 * @throws Exception
	 * @return Ambigous <Mixmaster_Core_Runner, unknown>
	 */
	public function Loader($module){
		$className = "Mixmaster_{$module}_Runner";
		$classObj = new $className();
		if(!($classObj instanceof Mixmaster_Core_Runner)){
			throw new Exception("The module is bad.");
		}
		return $classObj;
	}
	
}