<?php


class Pref
{
	private $props = [];
	private static $instance;

	private function __construct(){

	}

	public static function getInstance(){

		if(empty(self::$instance)){
			self::$instance = new Pref();
		}

		return self::$instance;
	}

	public function setProperty($key, $value){
		$this->props[$key] = $value;
	}

	public function getProperty($key){
		return isset($this->props[$key]) ? $this->props[$key] : null;
	}

}

$pref = Pref::getInstance();
$pref->setProperty("name", "pr");
$pref->setProperty("sname", "patel");
unset($pref); // remove prev object
$pref2 = Pref::getInstance();
print $pref2->getProperty("name") ."\n"; //  value is not lost
print $pref2->getProperty("sname") ."\n"; //  value is not lost

