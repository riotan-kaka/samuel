<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Web1 extends CI_Controller {
function __construct(){
parent::__construct();
$this->load->helper('url');
} 
Public function index(){
$data['judul'] = "Halaman depan";
$this->load->view('v_header',$data);
$this->load->view('v_index',$data);
$this->load->view('v_footer',$data);
}

public function about(){
	$data['judul'] = "Halaman about";
	$this->load->view('v_header',$data);
	$this->load->view('v_about',$data);
	$this->load->view('v_footer',$data);
	}


}