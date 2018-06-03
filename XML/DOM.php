<?php
/**
 * 基于DOM树结构解析器解析XML文档
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 下午 13:00
 */

$xmlDoc=new DOMDocument();
$xmlDoc->load("test.xml");
//print $xmlDoc->saveXML();//将整个DOM以字符串输出

/**
 * 遍历DOM
 */
$x=$xmlDoc->documentElement;
foreach($x->childNodes as $item){
    print $item->nodeName."=".$item->nodeValue."<br>";
}









