<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 下午 17:29
 */

/**
 * 读取普通文档
 */
$file=fopen("welcome.txt","r") or exit("Can't open the file!");
while(!feof($file)){
    echo fgets($file);//逐行读取文件
    //echo fgetc($file);//逐字符读取文件
}
fclose($file);


/**
 * 读取csv文档,若以上面的方法则csv中的，仍会存在
 */
/*$fh=fopen("welcome.csv","r");//这里我们只是读取数据，所以采用只读打开文件流
$arr=fgetcsv($fh);//这个函数就是读取CSV文件的函数，他把文本读入后转为数组存储在$arr中
fclose($fh);
foreach($arr as $key=>$value){echo $value." ";}//循环输出所有的值*/










