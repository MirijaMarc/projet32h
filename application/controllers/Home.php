<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");

class Home extends SecureController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data= $this->session->user;
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
        
    }
}
?>