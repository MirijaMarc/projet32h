<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Model{


    public function check($email, $mdp){
        $data = $this->findAll();
        foreach ($data as $element){
            if ($element['email']== $email && $element['password']== $mdp){
                return $element;
            }
        }
        return false;
    }

    public function get_lastId(){
        $query = $this->db->query('SELECT id from User order by id DESC LIMIT 1');
        $row= $query->row_array();
        return $row['id'];
    }
    public function save($user){
        $sql= "INSERT INTO User(email,nom,datenaissance,password) values (%s,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($user['email']),$this->db->escape($user['nom']),$this->db->escape($user['datenaissance']),$this->db->escape($user['password']));
        echo $sql;
        $this->db->query($sql);
    }


    public function findAll(){
        $rep=array();
        $query= $this->db->query('SELECT * from User');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['email']=$row['email'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['datenaissance']=$row['datenaissance'];
            $rep[$i]['password']=$row['password'];
            $rep[$i]['isadmin']=$row['isadmin'];
            $i++;
        }
        return $rep;
    }

    public function count_user(){
        $query = $this->db->query('SELECT count(*) as num from User');
        $row= $query->row_array();
        return $row['num'];
    }

    public function findById($id){
        $rep=null;
        $query= $this->db->query("SELECT * from User where id=".$this->db->escape($id));
        foreach ($query->result_array() as $row){
            $rep['id']=$row['id'];
            $rep['email']=$row['email'];
            $rep['nom']=$row['nom'];
            $rep['datenaissance']=$row['datenaissance'];
            $rep['password']=$row['password'];
            $rep['isadmin']=$row['isadmin'];
        }
        return $rep;
    }

}
