<?php
$this->load->helper('form');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php $this->load->view('header') ?>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                  
                <h1>Profile</h1>
                
                Welcome <strong><?=$this->session->userdata('email'); ?></strong>
                
                <hr>
                <ul>
                    <li><a href="<?=site_url('admin/posts/newpost') ?>">Add a New Post</a></li>
                </ul>
                                  
            </div>

            <?php $this->load->view('sidebar') ?>

        </div>

        <?php $this->load->view('footer') ?>

    </div>
    <!-- /.container -->
