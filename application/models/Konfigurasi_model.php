<?php
#===================================================|
# Please DO NOT modify this information :           |
#---------------------------------------------------|
# @Author       : Mukti
# @Date         : 2019-04-10 13:47 WIB
# @Email        : personal.mukti@gmail.com
# @Project      : CodeIgniter
# @Filename     : Konfigurasi_model.php
# @Instagram    : muktiandrea
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
{
    public $table = 'tbl_konfigurasi';
    public $id = 'id_konfigurasi';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // Listing Konfigurasi
    public function listing() {
        $this->db->select('*');
        $this->db->from('tbl_konfigurasi');
        $query = $this->db->get();
        return $query->row_array();
    }

}
