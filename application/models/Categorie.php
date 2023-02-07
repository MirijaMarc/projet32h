<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categorie extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAll(){
        $rep=array();
        $query= $this->db->query('select * from categorie');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $i++;
        }
        return $rep;
    }

    public  function findById($id){
        $rep=null;
        $query= $this->db->query("select * from categorie where id=".$this->db->escape($id));
        foreach ($query->result_array() as $row){
            $rep['id']=$row['id'];
            $rep['nomcategorie']=$row['nomcategorie'];
        }
        return $rep;
    }

}