<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery_model extends CI_Model
{
    public function insertgalery($data)
    {
        $this->db->insert('galeri', $data);

        return TRUE;
    }

    public function getgalery()
    {
        $hasil = $this->db->get('galeri');

        return $hasil;
    }

    public function getlimitgalery()
    {
        $hasil = $this->db->get('galeri', 3);

        return $hasil;
    }
}


/* End of file Gallery_model.php and path \application\models\middleware\Gallery_model.php */
