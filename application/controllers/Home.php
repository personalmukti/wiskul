<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('middleware/DataManager_model');
		$this->load->model('middleware/Gallery_model');
		$this->load->model('Settings_model');
	}

	public function index()
	{
		$data['title'] = 'Homepage | Wisata Kuliner Kerkof';

		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();
		$data['stand'] = $this->DataManager_model->getStandDisplay();
		$data['jadwal'] = $this->DataManager_model->getJadwal();

		$this->template->load('template/core/template', 'page/frontpage/index', $data);
	}

	public function details($id)
	{
		$data['title'] = 'Detail Stand | Wisata Kuliner Kerkof';
		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();
		$data['stands'] = $this->DataManager_model->showStand($id);
		$data['menus'] = $this->DataManager_model->showMenu($id);

		$this->template->load('template/core/template', 'page/frontpage/standpage', $data);
	}

	public function readMenu($id)
	{
		$data['title'] = 'Detail Item | Wisata Kuliner Kerkof';
		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();
		$data['item'] = $this->DataManager_model->showItem($id);

		$this->template->load('template/core/template', 'page/frontpage/itempage', $data);
	}

	public function about()
	{
		$data['title'] = 'Tentang Kami | Wisata Kuliner Kerkof';

		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();
		$data['konfig'] = $this->DataManager_model->getAbout()->result_array();

		$this->template->load('template/core/template', 'page/frontpage/about', $data);
	}

	public function kontak()
	{
		$data['title'] = 'Hubungi Kami | Wisata Kuliner Kerkof';

		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();

		$this->template->load('template/core/template', 'page/frontpage/kontak', $data);
	}

	public function denahStand()
	{
		$data['title'] = 'Denah Stand | Wisata Kuliner Kerkof';

		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();

		$this->template->load('template/core/template', 'page/frontpage/denah', $data);
	}

	public function togallery()
	{
		$data['title'] = 'Galeri Kami | Wisata Kuliner Kerkof';

		$data['webinfo'] = $this->DataManager_model->getKonfigurasi();
		$data['gbr'] = $this->Gallery_model->getgalery();

		$this->template->load('template/core/template', 'page/frontpage/pagegallery', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */