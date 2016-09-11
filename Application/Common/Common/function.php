<?php

/*公共函数
 */

//返回结果集函数
function return_result($status, $message, $data = "") {
    $result['status'] = $status;
    $result['message'] = $message;
    if (!empty($data)) {
        $result['data'] = $data;
    }   
    return $result;
}

/*
 * 
 *md5+salt加密函数
 */

function encrypt($password){
    //生成6为随机码
    $rand = mt_rand(100000, 999999);
    $salt = strval($rand);

    $encrypt = md5(md5($password).$salt);
    $data['password'] = $encrypt;
    $data['salt'] = $salt;
    return $data;
}


