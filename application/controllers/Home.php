<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");
/**
 * @property $objet
 */
class Home extends SecureController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $user = $this->session->user;
        $data['row']=$this->objet->findByIduserDetaille($user['id']);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('home',$data);
        $this->load->view('footer');
        
    }

    public function historique($idobjet=''){
        $data['row']=$this->historique->get_historique($idobjet);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('historique',$data);
        $this->load->view('footer');
    }

    public function search(){
        $search = $this->input->post('search');
        $id = $this->input->post('categorie');
        $data['row']=$this->objet->findBySearch($search,$id);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('search',$data);
        $this->load->view('footer');
    }



    public function choix($id=''){
        $data['iddemande']=$id ;
        $user = $this->session->user;
        $data['row']=$this->objet->findByuserDetailleTransac($user['id'],$id);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('choix',$data);
        $this->load->view('footer');
    }

    public function echange(){
        $user = $this->session->user;
        $data['row']=$this->demande->findAllAttente($user['id']);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('echange',$data);
        $this->load->view('footer');
    }

    public function accepter($iddemande='', $iddemandant=''){
        $this->demande->update($iddemande,$iddemandant,1);
        $objet1 = $this->objet->findById($iddemande);
        $objet2 = $this->objet->findById($iddemandant);
        $this->historique->insert($objet1['iduser'],$iddemandant);
        $this->historique->insert($objet2['iduser'],$iddemande);
        $this->objet->update($iddemande,$objet2['iduser']);
        $this->objet->update($iddemandant,$objet1['iduser']);
        redirect(base_url('home/'));
    }

    public function refuser($iddemande='', $iddemandant=''){
        $this->demande->update($iddemande,$iddemandant,2);
        redirect(base_url('home/'));
    }

    public function demande($iddemande='', $iddemandant=''){
        $this->demande->save($iddemande,$iddemandant);
        redirect(base_url('home/'));
    }

    public function magasin(){
        $user = $this->session->user;
        $data['row']=$this->objet->findAllDetaille($user['id']);
        $data2['row_categorie']=$this->categorie->findAll();
        $this->load->view('header',$data2);
        $this->load->view('magasin',$data);
        $this->load->view('footer');
    }
}
?>