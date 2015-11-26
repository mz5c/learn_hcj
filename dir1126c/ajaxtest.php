<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/11/26
 * Time: 16:55
 */
if($_POST['name'] == 'rico'){
    echo json_encode(array('res'=>'success','msg'=>'hello world','num'=>(int)$_POST['isAjax']));
}else{
    echo json_encode(array('res'=>'success','msg'=>'you are not rico','num'=>(int)$_POST['isAjax']));
}