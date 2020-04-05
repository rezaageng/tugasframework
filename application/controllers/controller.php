<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller extends CI_Controller {

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

	public function tentang()
	{
		$judul = [
			'judul' => 'Tentang',
			'halaman' => 'Data Diri'
		];

		$this->load->view('header', $judul);
		$this->load->view('sidebar');
		$this->load->view('tentang', $judul);
		$this->load->view('footer');
	}
}
