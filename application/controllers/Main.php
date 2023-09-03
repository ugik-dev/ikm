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
        // $this->load->model('m_pengunjung');
        // // $this->load->model('m_program');
        $this->load->model(array('AppModel'));
        // $this->m_pengunjung->count_visitor();
        $this->db->db_debug = FALSE;
    }
    function index()
    {

        $dataContent = array(
            'pageContent' => 'admin/v_login',
            // 'captcha_img' => $cap['image']
        );
        $this->load->view('template/main', $dataContent);
    }

    function cek_php()
    {
        echo PHP_VERSION;
    }
    function survey()
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

    function pengaduan()
    {
        $dataContent = array(
            'pageContent' => 'page/pengaduan',
        );
        $this->load->view('template/main', $dataContent);
    }

    function submit_survey()
    {
        try {
            $data = $this->input->post();
            if (empty($data['aksess'])) {
                throw new UserException('Maaf kamu belum mengisi bagian Akses Layanan');
            } else  if (empty($data['mutu'])) {
                throw new UserException('Maaf kamu belum mengisi bagian Mutu Layanan');
            } else  if (empty($data['proses'])) {
                throw new UserException('Maaf kamu belum mengisi bagian Prosess Layanan');
            } else  if (empty($data['sistem'])) {
                throw new UserException('Maaf kamu belum mengisi bagian Sistem Layanan');
            }
            $this->AppModel->submit_survey($data);
            echo json_encode(['error' => false, 'data' => $data]);
        } catch (Exception $e) {
            ExceptionHandler::handle($e);
        }
    }

    function submit_pesan()
    {
        try {
            $data = $this->input->post();
            if (empty($data['pesan']))
                throw new UserException('Maaf kamu belum mengisi pesan / kesan');
            // } else  if (empty($data['mutu'])) {
            //     throw new UserException('Maaf kamu belum mengisi bagian Mutu Layanan');
            // } else  if (empty($data['proses'])) {
            //     throw new UserException('Maaf kamu belum mengisi bagian Prosess Layanan');
            // } else  if (empty($data['sistem'])) {
            //     throw new UserException('Maaf kamu belum mengisi bagian Sistem Layanan');
            // }
            $this->AppModel->submit_kesan($data);
            echo json_encode(['error' => false, 'data' => $data]);
        } catch (Exception $e) {
            ExceptionHandler::handle($e);
        }
    }
}
