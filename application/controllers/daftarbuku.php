<?php
class DaftarBuku extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_daftarbuku');
    }

    public function index()
    {
        $isi['data'] = $this->m_daftarbuku->get_data_buku();
        $this->load->view('v_landing');
        $this->load->view('v_daftarbuku', $isi);
    }
}
