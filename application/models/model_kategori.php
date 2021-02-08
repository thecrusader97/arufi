<?php

class Model_kategori extends CI_Model
{
    public function data_roti()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'roti'));
    }
    public function data_kue()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'kue'));
    }
}