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
                  
                <h1>New Post</h1>
                
                <p class="msg msg-error"> <?php echo validation_errors(); ?>  </p>



<!-- Place this in the body of the page content -->
<form method="post">
    <textarea class="tinymce"></textarea>
</form>

                <?php echo form_open('admin/signin') ?>
                    <input type="text" name="email" placeholder="email address" />
                    <input type="password" name="password" />
                    <input type="submit" name="login" value="Login" />
                <?php echo form_close() ?>
                
                <a href="<?php echo site_url(array('admin','newuser')) ?>">Create a new user</a>
                                   
            </div>

            <?php $this->load->view('sidebar') ?>

        </div>

        <?php $this->load->view('footer') ?>

    </div>
    <!-- /.container -->
