<?php
$host="127.0.0.1";
$userName="root";
$password="";

if($connID=mysqli_connect($host,$userName,$password)){
    echo "<script type='text/javascript'>alert('数据库连接成功');</script>";

}else{
    echo "<script type='text/javascript'>alert('数据库连接失败');</script>";
}
?>
