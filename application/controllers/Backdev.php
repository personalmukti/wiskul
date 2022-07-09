<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backdev extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('middleware/DataManager_model');
		if (!$this->session->userdata('is_login')==TRUE) {
			redirect('home','refresh');
		}
	}

	public function index()
	{
		$data['title'] = 'Dashboard | Wisata Kuliner Garut';
		$data['pagename'] = 'Dashboard';

		$data['mhome'] = 'active';
		$data['mstand'] = '';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = '';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$data['cstand'] = $this->DataManager_model->getNumbStand();
		$data['cmenu'] = $this->DataManager_model->getNumbMenu();
		$data['cakun'] = $this->DataManager_model->getNumbAccount();

		$this->template->load('template/template', 'page/dashboard/index', $data);
	}

	public function stand()
	{
		$data['title'] = 'Stand | Wisata Kuliner Garut';
		$data['pagename'] = 'Stand Manager';

		$data['mhome'] = '';
		$data['mstand'] = 'active';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = '';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$data['dstand'] = $this->DataManager_model->getAllStand();

		$this->template->load('template/template', 'page/dashboard/stand', $data);
	}

	public function activateStand($id)
	{
		$this->DataManager_model->activateStand($id);

		redirect('stand-manager','refresh');
	}

	public function deactivateStand($id)
	{
		$this->DataManager_model->deactivateStand($id);

		redirect('stand-manager','refresh');
	}

	public function applyStand()
	{
		$id = $this->input->post('id');
		$data = array(
			'nama_slot' => $this->input->post('nama_slot'),
			'pemilik' => $this->input->post('pemilik'),
			'blok' => $this->input->post('blok'),
			'posisi' => $this->input->post('posisi'),
			'slogan' => $this->input->post('slogan'),
			'tgl_perubahan' => date("Y-m-d") 
		);

		$this->DataManager_model->updateStand($data, $id);

		redirect('stand-manager','refresh');
	}

	public function resetStand($id)
	{
		$data = array(
			'nama_slot' => 'Stand '.$id,
			'pemilik' => 'Wiskul Kerkof',
			'blok' => 'A/B/C/D',
			'posisi' => '0',
			'slogan' => 'Pusat Jajanan Kerkof',
			'tgl_perubahan' => date("Y-m-d") 
		);

		$this->DataManager_model->updateStand($data, $id);

		redirect('stand-manager','refresh');
	}

	public function menu()
	{
		$data['title'] = 'Menu | Wisata Kuliner Garut';
		$data['pagename'] = 'Menu Manager';

		$data['mhome'] = '';
		$data['mstand'] = '';
		$data['mmenu'] = 'active';
		$data['mprofil'] = '';
		$data['mbarcode'] = '';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$data['dstand'] = $this->DataManager_model->getActiveStand();
		$data['dmenu'] = $this->DataManager_model->getAllMenu();

		$this->template->load('template/template', 'page/dashboard/menu', $data);
	}

	public function saveMenu()
	{
		$config['upload_path'] = './assets/image/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['gbr_menu']['name'])){
	        if ($this->upload->do_upload('gbr_menu')){
	        	$gbr = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/image/'.$gbr['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 700;
	            $config['height']= 700;
	            $config['new_image']= './assets/image/'.$gbr['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gbr_menu=$gbr['file_name'];

                $stand_id=$this->input->post('stand_id');
                $nama_menu=$this->input->post('nama_menu');
                $harga_menu=$this->input->post('harga_menu');
                $deskripsi_menu=$this->input->post('deskripsi_menu');

                $data = array(
                	'stand_id' => $stand_id,
                	'nama_menu' => $nama_menu,
                	'harga_menu' => $harga_menu,
                	'deskripsi_menu' => $deskripsi_menu,
                	'gbr_menu' => $gbr_menu 
                );

				$this->DataManager_model->addMenu($data);

				redirect('menu-manager');
		}else{
			redirect('menu-manager');
	    }
	                 
	    }else{
			redirect('menu-manager');
		}	
	}

	public function editMenu()
	{
		$gbrnow = $this->input->post('gbr_menu');
		unlink("./assets/image/".$gbrnow);
		$id = $this->input->post('id');

		$config['upload_path'] = './assets/image/'; //path folder
	    $config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
	    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	    $this->upload->initialize($config);
	    if(!empty($_FILES['gbr_menu_baru']['name'])){
	        if ($this->upload->do_upload('gbr_menu_baru')){
	        	$gbrbaru = $this->upload->data();
	            //Compress Image
	            $config['image_library']='gd2';
	            $config['source_image']='./assets/image/'.$gbrbaru['file_name'];
	            $config['create_thumb']= FALSE;
	            $config['maintain_ratio']= FALSE;
	            $config['quality']= '60%';
	            $config['width']= 700;
	            $config['height']= 700;
	            $config['new_image']= './assets/image/'.$gbrbaru['file_name'];
	            $this->load->library('image_lib', $config);
	            $this->image_lib->resize();

	            $gbr_menu=$gbrbaru['file_name'];

				$data = array(
					'nama_menu' => $this->input->post('nama_menu'),
					'harga_menu' => $this->input->post('harga_menu'),
					'gbr_menu' => $gbr_menu,
					'deskripsi_menu' => $this->input->post('deskripsi_menu') 
				);

				$this->DataManager_model->updateMenu($data, $id);

				redirect('menu-manager');
		}else{
			redirect('menu-manager');
	    }
	                 
	    }else{
			redirect('menu-manager');
		}	

	}

	public function deleteMenu($id)
	{
		
		$imagename = $this->DataManager_model->getImageName($id);
		foreach ($imagename as $n) {
			$namaproduk = $n['gbr_menu'];
		}

		unlink("./assets/image/".$namaproduk);

		$this->db->where('id', $id);
		$this->db->delete('menu');

		redirect('menu-manager','refresh');
	}

	public function qrprime()
	{
		$data['title'] = 'Barcode | Wisata Kuliner Garut';
		$data['pagename'] = 'Barcode Utama';

		$data['mhome'] = '';
		$data['mstand'] = '';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = 'active';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$this->template->load('template/template', 'page/dashboard/qr_utama', $data);
	}

	public function qrstand()
	{
		$data['title'] = 'Barcode | Wisata Kuliner Garut';
		$data['pagename'] = 'Barcode Stand';

		$data['mhome'] = '';
		$data['mstand'] = '';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = 'active';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$data['dstand'] = $this->DataManager_model->getActiveStand();

		$this->template->load('template/template', 'page/dashboard/qr_stand', $data);
	}

	public function qrstandpreview($id)
	{

		$data['title'] = 'Printing | Wisata Kuliner Garut';
		$data['pagename'] = 'Barcode Stand';

		$data['dstand'] = $this->DataManager_model->getStandOne($id);

		$this->template->load('template/lesstemplate', 'page/dashboard/qr_stand_preview', $data);
	}

	public function account()
	{
		$data['title'] = 'Profile | Wisata Kuliner Garut';
		$data['pagename'] = 'Account Manager';

		$data['mhome'] = '';
		$data['mstand'] = '';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = 'active';
		$data['mprofil'] = '';
		$data['msetting'] = '';

		$data['akun'] = $this->DataManager_model->getProfile();

		$this->template->load('template/template', 'page/dashboard/profil', $data);
	}

	public function setting()
	{
		$data['title'] = 'Pengaturan | Wisata Kuliner Garut';
		$data['pagename'] = 'General Settings';

		$data['mhome'] = '';
		$data['mstand'] = '';
		$data['mmenu'] = '';
		$data['mprofil'] = '';
		$data['mbarcode'] = '';
		$data['mprofil'] = '';
		$data['msetting'] = 'active';

		$data['pengaturan'] = $this->DataManager_model->getKonfigurasi();

		$this->template->load('template/template', 'page/dashboard/setting', $data);
	}

	public function saveset()
	{
		$data = array(
			'nama_website' => $this->input->post('nama_website'),
			'tagline1' => $this->input->post('tagline1'),
			'tagline2' => $this->input->post('tagline2'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'instagram' => $this->input->post('instagram'),
			'about' => $this->input->post('about')
		);

		$id = 1;
		$this->db->where('id_konfigurasi', $id);
		$this->db->update('tbl_konfigurasi', $data);

		redirect('settings','refresh');
	}
	

}

/* End of file BackDev.php */
/* Location: ./application/controllers/BackDev.php */