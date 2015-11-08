<?php
/**
 * Created by PhpStorm.
 * User: mz5c
 * Date: 2015/11/8
 * Time: 23:11
 */
if(!empty($_POST['usrname'])){
    echo 'usrname: '.$_POST['usrname'].'<br>';
}
else{
    echo 'usrname: '.'<br>';
}
switch($_POST['sex']){
    case 0:
        echo 'sex: 保密'.'<br>';break;
    case 1:
        echo 'sex: 男'.'<br>';break;
    case 2:
        echo 'sex: 女'.'<br>';break;
}
switch($_POST['edu']){
    case 0:
        echo 'edu: 无'.'<br>';break;
    case 1:
        echo 'edu: 高中'.'<br>';break;
    case 2:
        echo 'edu: 大专'.'<br>';break;
    case 3:
        echo 'edu: 本科'.'<br>';break;
    case 4:
        echo 'edu: 研究生'.'<br>';break;
    case 5:
        echo 'edu: 其他'.'<br>';break;
}
function newfunc($str){
    switch($str){
        case 1:
            return 'Linux';break;
        case 2:
            return 'Apache';break;
        case 3:
            return 'MySQL';break;
        case 4:
            return 'PHP';break;
    }
}
$course = $_POST['course'];
$courseVar = '';
for($i = 0;$i < count($course);$i++){
    if(!empty($course[$i])){
        $courseVar .= newfunc($course[$i]).'，';
    }
}
$courseVar = rtrim($courseVar,'，');
echo 'course: '.$courseVar.'<br>';
if(!empty($_POST['eval'])){
    echo 'eval: '.$_POST['eval'].'<br>';
}
else{
    echo 'eval: '.'<br>';
}