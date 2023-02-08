<?php
defined('BASEPATH') or exit('No direct script access allowed');
include("SecureController.php");
class Home_admin extends SecureController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function change_categorie(){
        $idobjet= $this->input->post('idObjet');
        $idcategorie = $this->input->post('idCat');
        $this->objet->update_categorie($idobjet,$idcategorie);
        redirect(base_url('home_admin/'));
    }
    public function gestion(){
        $data['row']=$this->objet->findAllDetailleAdmin();
        $data['row_categorie']=$this->categorie->findAll();
        $this->load->view('header_admin_gestion');
        $this->load->view('gestion_admin',$data);
        $this->load->view('footer');
    }

    public function index(){
        $data['inscrit']=$this->user->count_user();
        $data['echange']=$this->demande->count_echange();
        $this->load->view('header_admin');
        $this->load->view('statistiques',$data);
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