  <?php

	$this->load->view('fragment/header');
	// $this->load->view('fragment/header');
	// $this->load->view('template/header_menu', $profil);
	$this->load->view($pageContent, $dataContent);

	$this->load->view('fragment/footer',	$profil);
	?>
