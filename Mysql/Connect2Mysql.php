<?php
/**
 * 连接mysql服务器
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/11/18 018
 * Time: 上午 10:50
 */

$servername = "localhost";
$username = "root";
$password = "root";

/**
 * mysqli连接（面向对象）
 * 手动关闭采用$conn->close();
 */
$conn = new mysqli($servername, $username, $password);//默认为3306
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";


/**
 * mysqli连接（面向过程）
 * 手动关闭采用mysqli_close($conn);
 */
/*$conn=mysqli_connect($servername,$username,$password);
//检测连接
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
echo "连接成功！";*/


/**
 * PDO连接
 * 手动关闭采用$conn=null;
 */
/*$dbname="manu";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    echo "连接成功";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}*/
