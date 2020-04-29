<?php 
// $str = "/data/www/dl.spdkey.com/beat/xintiao/1587432674975.wav";
// $ui = explode("xintiao/", $str);

// var_dump(explode('.', $ui[1]));
// list($s1, $s2) = explode(' ', microtime());
// var_dump($s1,$s2);
// echo PHP_EOL;
// echo time();
function getMillisecond() {
		list($s1, $s2) = explode(' ', microtime());
		return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
}
$wei = getMillisecond() - 86400000;
$str = '15880621295012323434.wav';
$wav=explode('.',$str);
if((float)$wav[0] > (float)$wei ){
	echo 'not';
}else{
	echo 'is_guoqi';
}
var_dump((float)$wav[0]);
var_dump((float)$wei);