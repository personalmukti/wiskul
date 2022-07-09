<?php defined('BASEPATH') or exit('No direct script access allowed');
#===================================================|
# Please DO NOT modify this information :           |
#---------------------------------------------------|
# @Author       : Mukti
# @Date         : 2019-04-10 13:47 WIB
# @Email        : personal.mukti@gmail.com
# @Project      : CodeIgniter
# @Filename     : MY_Controller.php
# @Instagram    : muktiandrea
#===================================================|

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->userdata = $this->session->userdata('userdata');
        $this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));
    }
    public function check_login()
    {
        // pengecekan jika tidak ada email dari session maka diarahkan untuk login
        if (!$this->session->userdata('is_login')) {
            redirect('auth/login');
        }
    }

    public function updateProfil()
    {
        if ($this->userdata != '') {
            $data = $this->Auth_model->select($this->userdata->id);

            $this->session->set_userdata('userdata', $data);
            $this->userdata = $this->session->userdata('userdata');
        }
    }
}
