<?php $this->load->view('header') ?>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                  
                
                <?php echo $content; ?>
                
            </div>

            <?php $this->load->view('sidebar') ?>

        </div>

        <?php $this->load->view('footer') ?>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="<?php echo base_url();?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.js"></script>

</body>

</html>

