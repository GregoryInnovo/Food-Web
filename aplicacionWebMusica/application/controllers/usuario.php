<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('usuario_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('usuario_form');
    }

    public function usuario_form() {
        $save = array(
            'nombre' => $this->input->post('nombre'),
            'genero' => $this->input->post('genero')
        );
        
        $this->usuario_model->saveUsuario($save);
        
        redirect('usuario/index');
    }

}

