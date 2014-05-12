<?php $this->load->view('header') ?>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                  
                
                <?php if (count($posts)): ?>
                
                    <?php foreach ($posts as $posts_item): ?>
                        <?php $url = site_url("posts/article/".$posts_item->id) ?>
                        <!-- blog entry -->
                        <h1><a href="<?php echo $url ?>"><?php echo $posts_item->title ?></a>
                        </h1>
                        <p class="lead">by <a href="index.php">Start Bootstrap</a>
                        </p>
                        <hr>
                        <p>
                            <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $posts_item->pubDate ?></p>
                        <hr>

                        <?php if (strlen($posts_item->imageURL)): ?>
                            <img src="http://placehold.it/900x300" class="img-responsive">
                            <hr>
                        <?php endif ?>


                        <p><?php echo $posts_item->shortDescr ?></p>
                        <a class="btn btn-primary" href="<?php echo $url ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                        <hr>
                    <?php endforeach ?>
                        
                <?php else: ?>
                    <h1>No Posts found!</h1>
                        
                <?php endif ?>
                
            </div>

            <?php $this->load->view('sidebar') ?>

        </div>

        <?php $this->load->view('footer') ?>

    </div>
    <!-- /.container -->
