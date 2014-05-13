<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users_model
 *
 * @author tavakolie
 */
class Users_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    
    public function createUser($email, $password) {
            $this->load->helper('url');

            $data = array(
                    'email' => $email,
                    'password' => $password
            );

            return $this->db->insert('users', $data);
    }
        
}
