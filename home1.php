<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model atau library yang diperlukan jika ada
    }

    public function index()
    {
        // Menampilkan view home
        $this->load->view('home');
    }
}
