<?php

use Jenssegers\Blade\Blade;

class BladeTemplate
{
    protected $blade;

    public function __construct()
    {
        $views = realpath(APPPATH . '../resources/views');
        $cache = realpath(APPPATH . '../storage/cache');

        $this->blade = new Blade($views, $cache);
    }

    public function view($view, $data = [])
    {
        echo $this->blade->render($view, $data);
    }
}
