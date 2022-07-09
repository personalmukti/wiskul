<?php
#===================================================|
# Please DO NOT modify this information :           |
#---------------------------------------------------|
# @Author     : Mukti
# @Date       : 2019-04-10 13:47 WIB
# @Email      : personal.mukti@gmail.com
# @Project    : CodeIgniter
# @Filename   : Auth_model.php
# @Instagram  : muktiandrea
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public $table       = 'tbl_user';
    public $id          = 'tbl_user.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function update($data, $id)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
        return $this->db->affected_rows();
    }

    public function get_by_id($id)
    {
        $this->db->select('
            tbl_user.*, tbl_role.id AS id_role, tbl_role.name, tbl_role.description,
            ');
        $this->db->join('tbl_role', 'tbl_user.id_role = tbl_role.id');
        $this->db->from($this->table);
        $this->db->where($this->id, $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function reg()
    {
      date_default_timezone_set('ASIA/JAKARTA');
      $data = array(
        'username' => $this->input->post('username'),
        'email' => $this->input->post('email'),
        'id_role' => '2',
        'photo' => '1.jpg',
        'created_on' => date('Y-m-d H:i:s'),
        'password' => get_hash($this->input->post('password'))
      );
      return $this->db->insert('tbl_user', $data);
    }

    public function login($email, $password)
    {
        $query = $this->db->get_where('tbl_user', array('email'=>$email, 'password'=>$password));
        return $query->row_array();
    }

    public function check_account($email)
    {
        //cari email lalu lakukan validasi
        $this->db->where('email', $email);
        $query = $this->db->get('tbl_user')->row();

        //jika bernilai 1 maka user tidak ditemukan
        if (!$query) {
            return 1;
        }
        //jika bernilai 2 maka user tidak aktif
        if ($query->active == 0) {
            return 2;
        }
        //jika bernilai 3 maka password salah
        if (!hash_verified($this->input->post('password'), $query->password)) {
            return 3;
        }

        return $query;
    }

    public function updateProfile()
    {
        $id = $this->session->userdata('id');
        $data = array(
            'first_name' => $this->input->post('fname'),
            'last_name' => $this->input->post('lname'),
            'email' => $this->input->post('email'),
            'password' => get_hash($this->input->post('password'))
        );

        $this->db->where('id', $id);
        $this->db->update('tbl_user', $data);

        return TRUE;
    }

    public function logout($date, $id)
    {
        $this->db->where('tbl_user.id', $id);
        $this->db->update('tbl_user', $date);
    }
}
