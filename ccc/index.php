<?php

class Mage{
	public static function init(){
		self::getController('Controller\Core\Front');
		Controller\Core\Front::init();
	}

	public static function getController($className,$ton=false){
		if(!$ton){
			self::loadFileByClassName($className);
			$className = self::buildClassName($className);
			return new $className();
		}
		$value = self::getRegistery($className);
		if($value){
			return $value;
		}
		self::loadFileByClassName($className);
		$className = self::buildClassName($className);
		self::setRegistery($className,$value);
		return $value;
	}

	public static function buildClassName($className)
	{
		$className = str_replace('\\', ' ', $className);
		$className = ucwords($className);
		$className = str_replace(' ', '\\', $className);
		return $className;
	}
	public static function getModel($className,$ton = false){
		if(!$ton){
			self::loadFileByClassName($className);
			$className = self::buildClassName($className);
			return new $className();
		}
		$value = self::getRegistery($className);
		if($value){
			return $value;
		}
		self::loadFileByClassName($className);
		$className = self::buildClassName($className);
		self::setRegistery($className,$value);
		return $value;
	}
	
	public static function getBlock($className,$ton=false){
		if(!$ton){
			self::loadFileByClassName($className);
			$className = self::buildClassName($className);
			return new $className();
		}
		$value = self::getRegistery($className);
		if($value){
			return $value;
		}
		self::loadFileByClassName($className);
		$className = self::buildClassName($className);
		self::setRegistery($className,$value);
		return $value;
	}

	public static function loadFileByClassName($className){
		$className = str_replace('\\', ' ', $className);
		$className = ucwords($className);
		$className = str_replace(' ', '/', $className);
		$className = $className.'.php';
		require_once($className);

	}

	public static function getBaseDir($subPath = null){
		if($subPath){
			return getcwd().DIRECTORY_SEPARATOR.$subPath;
		}
		return getcwd();
	}

	public static function setRegistery($key,$value)
	{
		$GLOBALS[$key] = $value;
	}
	public static function getRegistery($key,$optional=null)
	{
		if(!array_key_exists($key,$GLOBALS)){
			return $optional;
		}
		return $GLOBALS[$key];
	}

}

\Mage::init();
?>