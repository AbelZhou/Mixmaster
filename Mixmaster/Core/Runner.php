<?php
/**
 * 
 * @author Abel
 * email:abel.zhou@hotmail.com
 * 2015-1-17
 * UTF-8
 */
abstract class Mixmaster_Core_Runner{
	/**
	 * 配置信息
	 * @var array
	 */
	protected $config=null;
	
	/**
	 * 设置配置信息
	 * @param array $config
	 */
	public function setting(array $config){
		$this->config = $config;
	}
	
	/**
	 * 获得配置信息
	 * @return multitype:
	 */
	public function getConfig(){
		return $this->config;
	}
	
	protected function loadFiles(){
		
	}
	
	abstract function getContext();
	
}