<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

    public function db()
    {
        // Load database
        $this->load->database();

        // Coba query sederhana
        if ($this->db->conn_id) {
            echo "✅ Berhasil terhubung ke database!";
        } else {
            echo "❌ Gagal terhubung ke database.";
        }
    }
}
