<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model {
    
    public function getBanner(){
        return $this->db->get('banner');
    }

    function updateTagline($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('banner', $data);
    }

    function insertTagline($data)
    {
        $this->db->insert('banner', $data);

        return TRUE;
    }
}
