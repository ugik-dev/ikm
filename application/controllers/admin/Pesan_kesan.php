<?php
class Pesan_kesan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('AppModel');
    }


    public function index()
    {
        $filter = $this->input->get();
        $data['transaksi'] = $this->AppModel->getAllKesan($filter);
        // // $data['option_tahun'] = $this->AppModel->getTahun();
        // // echo json_encode($data);
        $this->load->view('admin/v_pesan_kesan', $data);
    }
}
