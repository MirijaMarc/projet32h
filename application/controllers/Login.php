<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");

/**
 * @property $user
 */
class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('user');
    }


    public function index(){
        $data['email']='wijjy@gmail.com';
        $data['mdp']='wijjy66';
        $this->load->view('login',$data);
    }

    public function index_admin(){
        $data['email']='root@gmail.com';
        $data['mdp']='root';
        $this->load->view('login',$data);
    }

    public function signup(){
        $this->load->view('signup');

    }

    public function validation_signup($data){
        if ($data['email']==null || $data['email']=="" || $data['nom']==null || $data['nom']=="" || $data['datenaissance']==null ||  $data['datenaissance']=="" || $data['password']==null ||  $data['password']=="" ||  $data['passwordconf']==null ||  $data['passwordconf']=="") {
            return false;
        }if ($data['password']!=$data['passwordconf']){
            return false;
        }
        return true;
    }

    public function insert(){
        $user=array();
        $user['email']=$this->input->post('email');
        $user['nom']=$this->input->post('nom');
        $user['datenaissance']=$this->input->post('birth');
        $user['password']=$this->input->post('password');
        $user['passwordconf']=$this->input->post('passwordConf');
        if($this->validation_signup($user)){
            $this->user->save($user);
            $newData = array(
                'id'=> $this->user->get_lastId(),
                'email'=>$user['email'],
                'nom'=>$user['nom']
            );
            $this->session->set_userdata('user',$newData);
            redirect(base_url('home/'));
        }else {
            redirect(base_url('login/signup'));
        }

    }

    public function check(){
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        if ($this->user->check($email, $mdp)!=false){
            $user = $this->user->check($email, $mdp);
            $newData = array(
                'id'=> $user['id'],
                'email'=>$email,
                'nom'=>$user['nom']
            );
            $this->session->set_userdata('user',$newData);
            if ($user['isadmin']==1){
                redirect(base_url('home_admin/statistique'));
            }else{
                redirect(base_url('home/'));
            }

        }else{
            redirect(base_url('login/'));
        }

    }

    
    public function deconnect(){
        $this->session->unset_userdata("user");
        redirect(site_url('login/'));
    }
}

?>