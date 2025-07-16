<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        var_dump($this->session->userdata());
        $this->template->view('backoffice.dashboard.index');
    }
}
