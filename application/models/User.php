<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model{

    public function check($email, $mdp){
        if ($email== "miri@gmail.com" && $mdp== "bonjour") return true;
        return false;
    }

}
?>