<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of posts
 *
 * @author tavakolie
 */
class Posts extends CI_Controller {
    
    public function article($id) {
        
        $this->load->model('posts_model');         
        $data['post'] = $this->posts_model->getPostsById($id);
        $this->load->view('single', $data);
        
    }    

    public function search($query = '') {
        
        $query = $this->input->get('query');
        $this->load->model('posts_model');         
        $data['posts'] = $this->posts_model->searchPosts($query);
        $this->load->view('index', $data);
        
    } 

    public function newPost() {
        $this->load->view('admin/posts/newpost');       

    }   
    
 }

