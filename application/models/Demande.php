<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Demande extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findAllAttente($iduser){
        $rep=array();
        $query= $this->db->query('select e.id,e.iddemandant,e.iddemande,c.nomcategorie as nom1,c2.nomcategorie as nom2 from echange as e JOIN objet as o ON e.iddemandant=o.id JOIN objet as o2 ON e.iddemande=o2.id JOIN categorie as c2 ON o2.idcategorie=c2.id JOIN categorie as c ON o.idcategorie=c.id where e.iddemande IN(select id from objet where iduser='.$this->db->escape($iduser).' and etat=0)');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['iddemande']=$row['iddemande'];
            $rep[$i]['iddemandant']=$row['iddemandant'];
            $rep[$i]['nom1']=$row['nom1'];
            $rep[$i]['nom2']=$row['nom2'];
            $i++;
        }
        return $rep;
    }

    public function count_echange(){
        $query = $this->db->query('SELECT count(*) as num from echange where etat=1');
        $row= $query->row_array();
        return $row['num'];
    }
    public function findAll(){
        $rep=array();
        $query= $this->db->query('SELECT * from valide');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['iddemande']=$row['iddemande'];
            $rep[$i]['iddemandant']=$row['iddemandant'];
            $rep[$i]['etat']=$row['etat'];
            $i++;
        }
        return $rep;
    }
    public function save($iddemande, $iddemandant){
        $sql= "INSERT INTO echange (iddemandant,iddemande,etat) values (%s,%s,0)";
        $sql = sprintf($sql,$this->db->escape($iddemandant),$this->db->escape($iddemande));
        echo $sql;
        $this->db->query($sql);
    }

    public function update($iddemande, $iddemandant, $etat){
        $sql= "update echange set etat=".$this->db->escape($etat). " where iddemande=".$this->db->escape($iddemande). " and iddemandant=".$this->db->escape($iddemandant);
        echo $sql;
        $this->db->query($sql);
    }

}