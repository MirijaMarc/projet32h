<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Historique extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($iduser,$idobjet){
        $sql= "INSERT INTO Historique(idobjet,iduser,dateappartenance) values (%s,%s,current_date)";
        $sql = sprintf($sql,$this->db->escape($idobjet),$this->db->escape($iduser));
        echo $sql;
        $this->db->query($sql);
    }

    public function get_historique($idobjet){
        $rep=array();
        $query= $this->db->query('select u.nom as nom ,h.dateappartenance as date from Historique as h Join User as u On h.iduser=u.id Where h.idobjet='.$this->db->escape($idobjet).' ORDER by h.dateappartenance');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['date']=$row['date'];
            $i++;
        }
        return $rep;
    }


}