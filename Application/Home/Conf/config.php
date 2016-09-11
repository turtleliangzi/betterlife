<?php
return array(
	//'配置项'=>'配置值'
    //'Public'路径配置
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__' => __ROOT__.'/Application/'.MODULE_NAME.'/Public',
        '__CSS__'    => __ROOT__.'/Application/'.MODULE_NAME.'/Public/Css',
        '__JS__'     => __ROOT__.'/Application/'.MODULE_NAME.'/Public/Js',
        '__IMG__'    => __ROOT__.'/Application/'.MODULE_NAME.'/Public/Img',
    )   
);
