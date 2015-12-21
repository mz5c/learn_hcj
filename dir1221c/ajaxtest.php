<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/12/21
 * Time: 18:38
 */
switch($_POST['sub']){
    case '+':
        $res = $_POST['first'] + $_POST['second'];
        echo json_encode(array('errcode'=>'success','res'=>$res));
        break;
    case '-':
        $res = $_POST['first'] - $_POST['second'];
        echo json_encode(array('errcode'=>'success','res'=>$res));
        break;
    case '*':
        $res = $_POST['first'] * $_POST['second'];
        echo json_encode(array('errcode'=>'success','res'=>$res));
        break;
    case '/':
        if($_POST['second'] == 0){
            echo json_encode(array('errcode'=>'failed','errmsg'=>'second num is 0'));
        }else{
            $res = $_POST['first'] / $_POST['second'];
            echo json_encode(array('errcode'=>'success','res'=>$res));
        }
        break;
}