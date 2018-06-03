<?php
/**
 * 控制层（Controller）
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 下午 23:08
 */

require_once("SiteRestHandler.php");

$view = "";
if(isset($_GET["view"]))
    $view = $_GET["view"];
/*
 * RESTful service 控制器
 * URL 映射
*/
switch($view){

    case "all":
        // 处理 REST Url /site/list/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getAllSites();
        break;

    case "single":
        // 处理 REST Url /site/show/<id>/
        $siteRestHandler = new SiteRestHandler();
        $siteRestHandler->getSite($_GET["id"]);
        break;

    case "" :
        //404 - not found;
        break;
}

















