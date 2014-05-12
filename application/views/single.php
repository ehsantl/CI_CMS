<?php $this->load->view('header') ?>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                  
                <?php if ($this->router->fetch_class() == "posts" && $this->router->fetch_method() == "article"): ?> 
                        <?php $url = $post->id ?>
                        <!-- blog entry -->
                        <h1><a href="<?php echo $url ?>"><?php echo $post->title ?></a>
                        </h1>
                        <p class="lead">by <a href="index.php">Start Bootstrap</a>
                        </p>
                        <hr>
                        <p>
                            <span class="glyphicon glyphicon-time"></span> Posted on <?php echo $post->pubDate ?></p>
                        <hr>

                        <?php if (strlen($post->imageURL)): ?>
                            <img src="http://placehold.it/900x300" class="img-responsive">
                            <hr>
                        <?php endif ?>


                        <p><?php echo $post->descr ?></p>

                        <hr>

                        <!-- pager -->
                        <ul class="pager">
                            <li class="previous"><a href="/<?php echo index_page() ?>">&larr; Back</a>
                            </li>
                        </ul>

                <?php endif ?>    
                
            </div>

            <?php $this->load->view('sidebar') ?>

        </div>

        <?php $this->load->view('footer') ?>
 
    </div>
    <!-- /.container -->