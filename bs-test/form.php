<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 14:51
 */
if(empty($_POST['name']) || empty($_POST['prof']) || empty($_POST['interesting']) || empty($_POST['sex']) || empty($_POST['age']) || empty($_POST['favsnum'])){
    echo 'error';
}else{
    $res = array('name'=>$_POST['name'],'prof'=>$_POST['prof'],'interesting'=>$_POST['interesting'],'sex'=>$_POST['sex'],'age'=>$_POST['age'],'favsnum'=>$_POST['favsnum']);
    echo json_encode($res);
}