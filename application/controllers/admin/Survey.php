<?php
class Survey extends CI_Controller
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
		$data['transaksi'] = $this->AppModel->getAllSurvey($filter);
		// // $data['option_tahun'] = $this->AppModel->getTahun();
		// // echo json_encode($data);
		$this->load->view('admin/v_survey', $data);
	}
}
