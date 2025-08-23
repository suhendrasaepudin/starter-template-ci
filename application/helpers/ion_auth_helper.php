<?php

function check_login()
{
    $CI = &get_instance();
    $CI->load->library('ion_auth');

    if (!$CI->ion_auth->logged_in()) {
        redirect('auth/login');
    }
}
