<?php
#===================================================|
# Please DO NOT modify this information :			|
#---------------------------------------------------|
# @Author 		: Mukti
# @Date 		: 2019-04-10 13:47 WIB
# @Email 		: personal.mukti@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: login_helper.php
# @Instagram 	: muktiandrea
#===================================================|

defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('get_hash')){
    function get_hash($PlainPassword){
        $option=[
                'cost'=>5,
    	        ];
    	return password_hash($PlainPassword, PASSWORD_DEFAULT, $option);
   }
}

if(!function_exists('hash_verified')){
    function hash_verified($PlainPassword,$HashPassword){
    	return password_verify($PlainPassword,$HashPassword) ? true : false;
   }
}