<?php
class Main extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('m_tulisan');
        // $this->load->model('m_galeri');
        // $this->load->model('m_pengumuman');
        // $this->load->model('m_agenda');
        // $this->load->model('m_files');
        $this->load->model('m_pengunjung');
        // $this->load->model('m_program');
        $this->load->model(array('M_general'));
        $this->m_pengunjung->count_visitor();
        $this->db->db_debug = FALSE;
    }
    function cek_php()
    {
        echo PHP_VERSION;
    }
    function index()
    {
        $dataContent = array(
            'pageContent' => 'page/landing_page',
        );
        $this->load->view('template/main', $dataContent);
    }
    function pesan_kesan()
    {
        $dataContent = array(
            'pageContent' => 'page/pesan_kesan',
        );
        $this->load->view('template/main', $dataContent);
    }
}
