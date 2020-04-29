<?php 
//引入必须文件
include "config/default.php";
include "app/Lib/loger.php";
include "app/Lib/router.php";
include "app/Lib/model.php";
include "router/web.php";
//返回路由的一个对象
return new App\Lib\Router();