<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tokoh extends CI_Controller {

    public function index()
    {
        $this->load->view('tokoh'); // Pastikan Anda memiliki file 'tokoh.php' di folder views
    }
}
