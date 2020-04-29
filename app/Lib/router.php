<?php 
namespace App\Lib;
use App\Lib\Logger;
use App\Lib\Request;
class Router{
	//记录规则
	public static $rule=[];
	public static function publish($uri,$classname){
		$key = md5($uri,TRUE);
		self::$rule[$key]['uri'] = $uri;
		self::$rule[$key]['classname'] = $classname;
	}
	public static function done404(){
		echo '404';
	}
	public static function start(){
		//获取当前的uri 进行判断是否存在
		$PATH_INFO = $_SERVER['PATH_INFO'];
		$key = md5($PATH_INFO,true);
		if(empty(self::$rule[$key])){
			self::done404();
		}
		//d
		$ruleitem = self::$rule[$key];
		$ruleArr  = explode('@', $ruleitem["classname"]);
		$method = $ruleArr[1];
		$classPath = "\\App\\Http\\Controllers\\".$ruleArr[0];
		$class = new $classPath;
		//执行当前控制器的方法
		call_user_func([$class,$method],new Request());
	}
}