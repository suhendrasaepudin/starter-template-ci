<?php

class Captcha
{
    protected $ci;
    protected $path;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->path = './captcha/';
        $this->ci->load->helper('captcha');
    }

    public function clear()
    {
        $captcha_old = $this->ci->session->userdata('file');
        if ($captcha_old) {
            $dir = $this->path . $captcha_old;
            if (file_exists($dir)) {
                unlink($dir);
            }
        }
    }

    public function generate()
    {
        $this->clear();
        $vals = [
            'word'          => substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 5),
            'img_path'      => $this->path,
            'img_url'       => base_url($this->path),
            'img_width'     => '200',
            'img_height'    => 30,
            'expiration'    => 7200,
            'word_length'   => 12,
            'font_size'     => 19,
            'img_id'        => 'Imageid',
            'pool'          => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ',

            'colors'        => [
                'background' => [255, 255, 255],
                'border'    => [228, 253, 253],
                'text'      => [0, 0, 0],
                'grid'      => [255, 140, 40]
            ]
        ];
        $captcha = create_captcha($vals);
        $this->ci->session->set_userdata(['captcha' => $captcha['word'], 'file' => $captcha['filename']]);
        return $captcha;
    }
}
