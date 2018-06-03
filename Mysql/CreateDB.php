<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 上午 11:00
 */
$servername="localhost";
$username="root";
$password="yudeqq814";

/**
 * mysqli创建数据库（面向对象）
 */
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
// 创建数据库
$sql = "CREATE DATABASE phpDB";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();


/**
 * mysqli创建数据库（面向过程）
 */
/*$conn = mysqli_connect($servername, $username, $password);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
// 创建数据库
$sql = "CREATE DATABASE phpdb1";
if (mysqli_query($conn, $sql)) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
mysqli_close($conn);*/


/**
 * PDO创建数据库(需先连接上一个已经存在的数据库)
 */
/*$dbname="phpdb1";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式为异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE myDBPDO";
    // 使用 exec() ，因为没有结果返回
    $conn->exec($sql);
    echo "数据库创建成功<br>";
}catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
}
$conn = null;*/