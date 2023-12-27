<?php
class Visi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_visi');
	}
	function index()
	{
		$this->data['main_view']   = 'depan/v_visi_misi';
		// $visi = $this->m_visi->get_all_visi();
		$this->load->view('theme/template', $this->data);
	}
}
