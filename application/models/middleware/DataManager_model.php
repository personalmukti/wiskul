<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataManager_model extends CI_Model {

	function getAllStand() 
	{
		$stand = $this->db->get('stand');

		return $stand;
	}

	function getActiveStand() 
	{
		$status = 1;
		$this->db->where('status', $status);
		$stand = $this->db->get('stand');

		return $stand;
	}

	function getInActiveStand() 
	{
		$status = 0;
		$this->db->where('status', $status);
		$stand = $this->db->get('stand');

		return $stand;
	}

	function activateStand($id)
	{
		$data = array(
			'status' => 1
		);

		$this->db->where('id', $id);
		$this->db->update('stand', $data);
	}

	function deactivateStand($id)
	{
		$data = array(
			'status' => 0
		);

		$this->db->where('id', $id);
		$this->db->update('stand', $data);
	}

	function updateStand($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('stand', $data);

		return TRUE;
	}

	public function getStandOne($id)
	{
		
		$query = $this->db->query('SELECT qrlist.stand_id, qrlist.qrcode, stand.nama_slot, stand.slogan, stand.pemilik FROM stand INNER JOIN qrlist ON qrlist.stand_id=stand.id WHERE stand.id='.$id);

		return $query;
	}

	function getAllMenu() 
	{
		$query = $this->db->query('SELECT stand.id, stand.nama_slot, menu.id, menu.nama_menu, menu.gbr_menu, menu.harga_menu, menu.deskripsi_menu FROM menu INNER JOIN stand ON stand.id=menu.stand_id;');

		return $query;
	}

	function addMenu($data)
	{
		$this->db->insert('menu', $data);
		return TRUE;
	}

	function updateMenu($data, $id)
	{
		$this->db->where('id', $id);
		$this->db->update('menu', $data);

		return TRUE;
	}

	function getImageName($id)
	{
		$filename = $this->db->query('select gbr_menu from menu where id='.$id);

		return $filename->result_array();
	}

	function getProfile()
	{
		$id = $this->session->userdata('id');
		$this->db->where('id', $id);
		$profil = $this->db->get('tbl_user');

		return $profil;
	}

	function getNumbStand()
	{
		$query = $this->db->get('stand');
		$stand = $query->num_rows();

		return $stand;
	}

	function getNumbMenu()
	{
		$query = $this->db->get('menu');
		$menu = $query->num_rows();

		return $menu;
	}

	function getNumbAccount()
	{
		$query = $this->db->get('tbl_user');
		$user = $query->num_rows();

		return $user;
	}

	function getKonfigurasi()
	{
		$query =  $this->db->get('tbl_konfigurasi');

		return $query;
	}

	function getStandDisplay()
	{
		$status = 1;
		$this->db->where('status', $status);

		return $this->db->get('stand')->result_array();

	}

	function getAbout()
	{
		return $this->db->get('tbl_konfigurasi');
	}

	function showMenu($id)
	{
		$this->db->where('stand_id', $id);
		return $this->db->get('menu')->result_array();
	}

	function showStand($id)
	{
		$this->db->where('id', $id);
		return $this->db->get('stand')->result_array();
	}

}

/* End of file DataManager_model.php */
/* Location: ./application/models/middleware/DataManager_model.php */