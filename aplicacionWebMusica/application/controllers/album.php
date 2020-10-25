<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('album_model');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $this->load->view('album_form');
    }

    public function album_form() {
        $save = array(
            'nombreAlbum' => $this->input->post('nombreAlbum'),
            'fechaLanzamiento' => $this->input->post('fechaLanzamiento')
        );
        
        $this->album_model->saveAlbum($save);
        
        redirect('album/index');
    }

}
