<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");
class Login extends CI_Controller{


    public function index(){
        $this->load->view('login2');
    }

    public function signup(){
        $this->load->view('signup');
    }



    public function check(){
        $this->load->model('user');
        $email = $this->input->post('email');
        $mdp = $this->input->post('mdp');
        if ($this->user->check($email, $mdp)==true){
            $newData = array(
                'user'=> '1',
                'email'=>$email,
                'log_in'=>true
            );
            $this->session->set_userdata('user',$newData);
            redirect(base_url('home/'));
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