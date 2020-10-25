<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Album_model extends CI_Model {
    
    public function saveAlbum($data) {
        $this->db->insert('albumes',$data);
        
        $idAl=$this->db->insert_id();
        return $idAl;
    }
}