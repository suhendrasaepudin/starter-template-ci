<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_login();
        $this->template->set_layout('layouts/backoffice/main');
    }

    public function index()
    {
        $this->template->view('backoffice/dashboard/index');
    }
}
