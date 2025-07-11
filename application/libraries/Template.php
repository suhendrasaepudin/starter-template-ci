<?php

class Template
{
    protected $CI;
    protected $layout = 'layouts/main';
    protected $data = [];

    public function __construct()
    {
        $this->CI = &get_instance();
    }

    public function set_layout($layout)
    {
        $this->layout = $layout;
    }

    public function view($view, $data = [], $return = FALSE)
    {
        $this->data = $data;
        $this->data['content'] = $this->CI->load->view($view, $data, TRUE);
        return $this->CI->load->view($this->layout, $this->data, $return);
    }
}
