<?php
#===================================================|
# Please DO NOT modify this information :			|
#---------------------------------------------------|
# @Author 		: Mukti
# @Date 		: 2019-04-10 13:47 WIB
# @Email 		: personal.mukti@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Template.php
# @Instagram 	: muktiandrea
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Template
{
    var $template_data = array();
    function set($name, $value){
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '' , $view_data = array(), $return = FALSE){
        $this->CI =& get_instance();
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}