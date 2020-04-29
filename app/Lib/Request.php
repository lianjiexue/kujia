<?php 
namespace App\Lib;
class Request
{
	public function getMethod()
	{
		echo 'post';
	}
	public function isMethod($method)
	{
		$request_method = $_SERVER['REQUEST_METHOD'];
		if ($method === $request_method){
			return true;
		}else{
			return false;
		}
	}
}
