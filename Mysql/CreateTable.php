<?php
/**
 * 在指定数据库中创建表，增加和修改、删除表数据类似，只需将sql语句修改为对应的即可。
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 上午 11:15
 */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "phpdb";

/**
 * mysqli创建数据表（面向对象）
 */
/*$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
// 使用 sql 创建数据表
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
$conn->close();*/


/**
 * mysqli创建数据表（面向流程）
 */
/*$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("连接失败：".msyqli_connect_error());
}
$sql="CREATE TABLE MYGUESTS(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP 
)";
if(mysqli_query($conn,$sql)){
    echo "数据表MyGuests创建成功！";
}else{
    echo "创建数据表错误：".mysqli_error($conn);
}
mysqli_close($conn);*/


/**
 * PDO创建数据表
 */
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // 设置 PDO 错误模式，用于抛出异常
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // 使用 sql 创建数据表
    $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    // 使用 exec() ，没有结果返回
    $conn->exec($sql);
    echo "数据表 MyGuests 创建成功";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;


















