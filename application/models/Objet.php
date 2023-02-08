<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Objet extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function update($id,$iduser){
        $sql= "update objet set iduser=".$this->db->escape($iduser). " where id=".$this->db->escape($id);
        echo $sql;
        $this->db->query($sql);
    }

    public function update_categorie($id,$idcat){
        $sql= "update objet set idcategorie=".$this->db->escape($idcat). " where id=".$this->db->escape($id);
        echo $sql;
        $this->db->query($sql);
    }

    public function save($nomObj,$description,$prixObj,$id,$idcategorie){
        $sql= "INSERT INTO objet(nomobjet,description,prix,iduser,idcategorie) values (%s,%s,%s,%s,%s)";
        $sql = sprintf($sql,$this->db->escape($nomObj),$this->db->escape($description),$this->db->escape($prixObj),$this->db->escape($id),$this->db->escape($idcategorie));
        echo $sql;
        $this->db->query($sql);
    }

    public function get_last_id(){
        $query = $this->db->query('SELECT id from objet order by id DESC LIMIT 1');
        $row= $query->row_array();
        return $row['id'];
    }
    public function findByuserDetailleTransac($iduser,$iddemande){
        $rep=array();
        $query= $this->db->query('select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.iduser='.$this->db->escape($iduser).' AND o.id NOT IN (SELECT iddemandant from echange where iddemande='.$this->db->escape($iddemande).' and etat=0)');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findByIduserDetaille($iduser){
        $rep=array();
        $query= $this->db->query('select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.iduser='.$this->db->escape($iduser));
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findAllDetaille($iduser){
        $rep=array();
        $query= $this->db->query('select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.iduser!='.$this->db->escape($iduser));
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findAllDetailleAdmin(){
        $rep=array();
        $query= $this->db->query('select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie, o.idcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $rep[$i]['idcategorie']=$row['idcategorie'];
            $i++;
        }
        return $rep;
    }



    public function findAll(){
        $rep=array();
        $query= $this->db->query('select * from objet');
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['iduser']=$row['iduser'];
            $rep[$i]['idcategorie']=$row['idcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findByIdUser($iduser){
        $rep=array();
        $query= $this->db->query("select * from objet where iduser=".$this->db->escape($iduser));
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['iduser']=$row['iduser'];
            $rep[$i]['idcategorie']=$row['idcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findBySearch($search, $idcategorie){
        $rep=array();
        $sql=null;
        if ($idcategorie==''){
            $sql = "select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.description like '%s".$search."%s'";
        }else{
            $sql = "select o.id, o.nomobjet,o.description,o.prix,u.nom, c.nomcategorie from objet as o Join User as u on o.iduser=u.id JOIN categorie as c on o.idcategorie=c.id where o.description like '%s".$search."%s' and o.idcategorie=".$idcategorie;
        }

        $sql= sprintf($sql,'%','%');
        $query= $this->db->query($sql);
        $i=0;
        foreach ($query->result_array() as $row){
            $rep[$i]['id']=$row['id'];
            $rep[$i]['nomobjet']=$row['nomobjet'];
            $rep[$i]['description']=$row['description'];
            $rep[$i]['prix']=$row['prix'];
            $rep[$i]['nom']=$row['nom'];
            $rep[$i]['nomcategorie']=$row['nomcategorie'];
            $i++;
        }
        return $rep;
    }

    public function findById($id){
        $rep=null;
        $query= $this->db->query("SELECT * from objet where id=".$this->db->escape($id));
        foreach ($query->result_array() as $row){
            $rep['id']=$row['id'];
            $rep['nomobjet']=$row['nomobjet'];
            $rep['description']=$row['description'];
            $rep['prix']=$row['prix'];
            $rep['iduser']=$row['iduser'];
            $rep['idcategorie']=$row['idcategorie'];
        }
        return $rep;
    }


}