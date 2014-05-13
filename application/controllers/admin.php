<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin
 *
 * @author tavakolie
 */
class Admin extends CI_Controller {

    public function __construct() {
	parent::__construct();
	$this->load->model('users_model');
    }
        
    public function index() {
        $this->load->view('admin/login');
    }

    
    public function login() {
        $this->load->view('admin/login');
    }

    public function newUser() {
        $this->load->view('admin/create');
    }    
    
    public function create() {
        
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('admin/create');
        } else {
            if ($this->users_model->createUser($this->input->post('email'), md5($this->input->post('password')) )) {
                
                $this->load->view('admin/profile');
            } else {
                $this->load->view('admin/create');
            }
            
            
            
        }

    }        
}
