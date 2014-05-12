<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of posts_model
 *
 * @author tavakolie
 */
class Posts_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getLatestPosts($limit = 10) {
        $query = $this->db->order_by('pubDate', 'DESC')->get('posts', $limit);
        return $query->result();
    }

    public function getPostsById($id) {
        $query = $this->db->get_where('posts', array('id' => $id));
        return $query->row();
    }

    public function searchPosts($query) {
        $query = $this->db->like('title', $query)->or_like('descr', $query)->get('posts');
        return $query->result();
    }
    
}


?>

