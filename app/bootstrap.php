<?php 
//引入必须文件
include "config/default.php";
include "config/database.php";
include "Lib/loger.php";
include "Lib/router.php";
include "../router/web.php";
//返回路由的一个对象
return new App\Lib\Router();