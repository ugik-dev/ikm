  <?php

	// $profil = array('profil' => getProfil());
	// $menu = array('menu' => getMenu());
	// if (empty($dataContent)) {
	// 	$dataContent = array();
	// }
	// $dataContent['profil'] = $profil['profil'];
	$this->load->view('fragment/header');
	// $this->load->view('fragment/header');
	// $this->load->view('template/header_menu', $profil);
	$this->load->view($pageContent, $dataContent);

	$this->load->view('fragment/footer',	$profil);
	?>
