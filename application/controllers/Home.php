<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in_admin') !== TRUE) {
            redirect('login');
        }

        $this->load->model('M_duk');
    }
    public function index()
    {
        // $data['tot_pgw'] = $this->db->count_all_results('pegawai');
        // $data['tot_usr'] = $this->M_duk->getAllAdmin();
        $data['tot_p'] = $this->db->count_all_results('pengajuan');
        $data['duk'] = $this->M_duk->getAllDataDuk();
        $data['sidebar'] = "#mn1";
        $this->load->view('layouts/partials/header');
        $this->load->view('home', $data);
        $this->load->view('layouts/partials/footer', $data);
    }
}
