<?php
class Struktur extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->data['main_view']   = 'depan/v_struktur';
        $this->load->view('theme/template', $this->data);
    }
}
