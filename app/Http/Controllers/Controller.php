<?php 
namespace App\Http\Controllers;
use Twig;
class Controller
{
	private $assignData=[];
	public function _empty(){}
	public function display($filename = null)
	{
		$path = ROOT_PATH.'resource/view/';
		$loader = new Twig\Loader\FilesystemLoader($path);
		$twig = new Twig\Environment($loader,[
			"cache" => ROOT_PATH.'resource/cache'
		]);
		$template = $twig->load($filename);
		echo $template->render($this->assignData);
	}
	public function assign($key,$value)
	{
		$this->assignData[$key] = $value;
	}
}