<?php

class HomeTemplate extends CI_Controller
{

    public function index()
    {
        $this->load->library('template');

        $data['title'] = 'Beranda';
        $this->template->view('template/index', $data);
    }
}
