<?php

class Berkat extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') == 1) {

			redirect('admin/dashboard_admin');
		}
	}

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		//$data['artikel'] = $this->model_barang->artikel()->result();
		$this->load->view('templates/header');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
	public function profil()
	{
		$this->load->view('templates/header');
		$this->load->view('profil');
		$this->load->view('templates/footer');
	}
	public function produk()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('produk', $data);
		$this->load->view('templates/footer');
	}
}