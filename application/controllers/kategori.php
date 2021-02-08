<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == 1) {

            redirect('admin/dashboard_admin');
        }
    }

    public function roti()
    {
        $data['roti'] = $this->model_kategori->data_roti()->result();
        $this->load->view('templates/header');
        $this->load->view('roti', $data);
        $this->load->view('templates/footer');
    }
    public function kue()
    {
        $data['kue'] = $this->model_kategori->data_kue()->result();
        $this->load->view('templates/header');
        $this->load->view('kue', $data);
        $this->load->view('templates/footer');
    }
}