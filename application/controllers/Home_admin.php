<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $data= $this->session->user;
        $this->load->view('header_admin');
        $this->load->view('home_admin',$data);
        $this->load->view('footer');
    }

    public function statistique(){
        $data['inscrit']=$this->user->count_user();
        $data['echange']=$this->demande->count_echange();
        $this->load->view('header_admin');
        $this->load->view('statistiques',$data);
        $this->load->view('footer');
    }
}