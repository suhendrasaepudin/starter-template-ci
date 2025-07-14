<?php

function csrf()
{
    $CI = &get_instance();
    return '<input type="hidden" name="' . $CI->security->get_csrf_token_name() . '" value="' . $CI->security->get_csrf_hash() . '">';
}
