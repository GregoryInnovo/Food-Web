<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    public function saveUsuario($data) {
        $this->db->insert('usuario',$data);
        
        $idAl=$this->db->insert_id();
        return $idAl;
    }
}