<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notfound extends CI_Controller
{

	public function index()
	{
		$this->construction();
	}

	public function construction()
	{
		$data['title'] = 'Under Construction| Wisata Kuliner Garut';

		$this->load->view('internal/construction', $data);
	}
}

/* End of file Notfound.php */
/* Location: ./application/controllers/Notfound.php */