<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {
    
    public function getBanner(){
        return $this->db->get('banner');
    }
}
