<?php 
namespace App\Http\Controllers;

class IndexController
{
	public function getSn()
	{
		$str = date('ymdHis',time()).getmypid();
		return $str;
	}
	public function index()
	{
		echo $this->getSn();
	}
}