<?php
/**
 * 使用simplexml解析XML文档
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 下午 13:10
 */
$xml=simplexml_load_file("test.xml");
//print_r($xml);//输出对象的键和元素

/**
 * 输出每个元素的数据
 */
/*echo $xml->to."<br>";
echo $xml->from."<br>";
echo $xml->heading."<br>";
echo $xml->body."<br>";*/

/**
 * 输出每个节点的元素名称和数据
 */
echo $xml->getName()."<br>";
foreach ($xml->children() as $child){
    echo $child->getName()." : ".$child."<br>";
}