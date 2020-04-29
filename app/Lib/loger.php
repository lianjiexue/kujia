<?php 
namespace App\Lib;
class Logger
{
	public static function record($data){
		$logData 	 = json_encode($data);
		$logFileName = date('Y-m-d',time());
		file_put_contents($logFileName.".log", date('Y-m-d H:i:s',time()).':'.$logData.PHP_EOL,FILE_APPEND);
	}
}