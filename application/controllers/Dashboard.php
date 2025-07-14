<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->template->view('backoffice.dashboard.index');
    }
}
