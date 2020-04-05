<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$judul = [
			'judul' => 'Pembuatan web',
			'halaman' => 'Framework'
		];

		$this->load->view('header', $judul);
		$this->load->view('sidebar');
		$this->load->view('index', $judul);
		$this->load->view('footer');
	}

	public function mvc()
	{
		$judul = [
			'judul' => 'Pembuatan web',
			'halaman' => 'MVC'
		];

		$this->load->view('header', $judul);
		$this->load->view('sidebar');
		$this->load->view('mvc', $judul);
		$this->load->view('footer');
	}

	public function ci()
	{
		$judul = [
			'judul' => 'Pembuatan web',
			'halaman' => 'Codeigniter'
		];

		$this->load->view('header', $judul);
		$this->load->view('sidebar');
		$this->load->view('ci', $judul);
		$this->load->view('footer');
	}

	public function tutorial()
	{
		$judul = [
			'judul' => 'Pembuatan web',
			'halaman' => 'Tutorial'
		];

		$this->load->view('header', $judul);
		$this->load->view('sidebar');
		$this->load->view('tutorial', $judul);
		$this->load->view('footer');
	}
}
