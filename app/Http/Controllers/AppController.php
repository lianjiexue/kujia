<?php 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Lib\Request;
class AppController extends Controller
{
	public function index()
	{ 
		$this->assign("date",date('Y-m-d H:i:s',time()));
		$this->display("app/index.html");
	}
	public function login(Request $request)
	{
		$this->display('app/login.html');
	}
}