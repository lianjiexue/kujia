<?php 
namespace App\Http\Controllers;
use App\Model\Product;
class IndexController
{
	public function getSn()
	{
		$str = date('ymdHis',time()).getmypid();
		return $str;
	}
	public function index()
	{
		$product = new Product();
		$goods = $product->first();
		var_dump($goods->toArray());
	}
}