<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecureController extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if ($this->session->has_userdata("user")==false){
            redirect(base_url("login/"));
        }
    }
}


?>