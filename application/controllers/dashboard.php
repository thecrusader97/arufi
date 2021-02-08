<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') == 1) {

            redirect('admin/dashboard_admin');
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'    => $barang->id_brg,
            'qty'    => 1,
            'price'    => $barang->harga,
            'name'    => $barang->nama_brg
        );
        $this->cart->insert($data);
        redirect('berkat');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('berkat');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $data['no_pesanan'] = $this->input->post('no_pesanan');
        $no_pesanan = $data['no_pesanan'];
        $is_processed = $this->model_invoice->index($no_pesanan);
        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('proses_pesanan', $data);
            $this->load->view('templates/footer');
        } else {
            echo "Maaf, pesanan Anda gagal diproses.";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}