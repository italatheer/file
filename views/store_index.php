<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('store/requires/header');
//$this->load->view('store/requires/page_header');
$this->load->view($subview);
$this->load->view('store/requires/footer');
?>