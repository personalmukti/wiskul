<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		echo "<h2> 404 Not Found </h2>";		
	}

	public function construction()
	{
		$data['title'] = 'Under Construction| Wisata Kuliner Garut';

		$this->load->view('internal/construction', $data);
	}
	
}

/* End of file Notfound.php */
/* Location: ./application/controllers/Notfound.php */