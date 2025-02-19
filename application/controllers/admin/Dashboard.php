<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><strong>Upss </strong>Anda tidak memiliki Akses,silahkan login!</div>');
            redirect('login');
        }
        $this->load->model('katalog_model');
        $this->load->model('pesanan_model');
    }

	public function index()
	{
        $data = array(
            'title' => 'Website JWP Wedding Organizer',
            'page' => 'admin/dashboard',
                'TotalKatalog' => $this->katalog_model->get_all_katalog()->num_rows(),
                'TotalPesanan' => $this->pesanan_model->get_count_pesanan('all'),
                'PesananMenunggu' => $this->pesanan_model->get_count_pesanan('requested'),
                'PesananDiterima' => $this->pesanan_model->get_count_pesanan('approved'),
        );

		$this->load->view('admin/template/main', $data);
	}
}
