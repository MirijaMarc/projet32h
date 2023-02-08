<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function uploadImage($file,$categorie,$idobjet) {
    $dossier = $_SERVER['DOCUMENT_ROOT'] . "template/assets/img/".$categorie."/";

    $newNamer = $idobjet.".jpg";

    if(move_uploaded_file($file['tmp_name'], $dossier . $newNamer)) {
        return $newNamer;
    }
    return "non";
}

