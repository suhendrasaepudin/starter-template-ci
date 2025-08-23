<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        check_login();
    }

    public function index()
    {
        $this->template->view('backoffice.dashboard.index');
    }
}
