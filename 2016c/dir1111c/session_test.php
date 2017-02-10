<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/11
 * Time: 18:39
 */
session_start();
if(isset($_SESSION['views'])){
    $_SESSION['views']++;
}else{
    $_SESSION['views'] = 1;
}