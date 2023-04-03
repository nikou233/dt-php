<?php
$config=[
    'DB_CONNECT'=>[
        'host' => 'localhost',
        'user' => 'root',
        'pass' => 'root',
        'dbname' => 'itcast_cms',
        'port' =>'3306',
    ],
    'DB_CHARSET' =>'utf8',
];
function db_conn($config)
{
    $con=mysqli_connect($config['DB_CONNECT']['host'],$config['DB_CONNECT']['user'],$config['DB_CONNECT']['pass'],$config['DB_CONNECT']['dbname']);
    if (!$con)
    {
        die("连接错误". mysqli_connect_error()); 
    }else{

    }
    return $con;
}