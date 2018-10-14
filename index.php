<?php include 'includes/header.php' ?>
<?php include 'includes/db.php' ?>

<body>

   <?php include 'includes/navigation.php' ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-12 col-md-8">

                <h1 class="page-header">
                    CMS Blog
                    <small>Welcome</small>
                </h1>

                <!-- First Blog Post -->
                <?php 
                        $query = 'SELECT * FROM posts';
                        $slect_allpost_query = $conn->query($query);
                        
                        while($row = $slect_allpost_query->fetch_assoc()){
                                $post_title = $row['post_title'];
                                $post_author = $row['post_author'];
                                $post_date = $row['post_date'];
                                $post_content = $row['post_content'];
                                $post_img = $row['post_img'];
                        
                ?>
                       
                <h2>
                    <a href="#"><?php echo $post_title ?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?php echo $post_author ?></a>
                </p>
                <p><i class="far fa-clock"></i> Posted on <?php echo $post_date ?></p>
                <hr>
                <img class="img-fluid" src="<?php echo $post_img ?>" alt="">
                <hr>
                <p><?php echo $post_content ?></p>
                <a class="btn btn-outline-primary" href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>

                <hr>
                
                <?php } ?>
                <!-- Second Blog Post -->
<!--
                <div class="2nd-blog-post">
                    <h2>
                        <a href="#">Blog Post Title</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><i class="far fa-clock"></i> Posted on August 28, 2013 at 10:45 PM</p>
                    <hr>
                    <img class="img-fluid" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                    <a class="btn btn-outline-primary" href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>

                    <hr>
                </div>
-->

                <!-- Third Blog Post -->
<!--
                <div class="3rd-blog-post">
                    <h2>
                        <a href="#">Blog Post Title</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><i class="far fa-clock"></i> Posted on August 28, 2013 at 10:45 PM</p>
                    <hr>
                    <img class="img-fluid" src="http://placehold.it/900x300" alt="">
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                    <a class="btn btn-outline-primary" href="#">Read More  <i class="fas fa-chevron-circle-right"></i></a>
                </div>
-->
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include 'includes/sidebar.php' ?>
        
        <hr>

                <!-- Pager -->
               <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
    </div>
    
    <!-- /.container -->
    <div class="container">
       <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="font-italic">Copyright &copy; Intrug Web Programming &amp; Design </p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>
    </div>

<?php include 'includes/footer.php' ?>
