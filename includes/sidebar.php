<div class="col-6 col-md-4">
                
                <!-- Blog Categories Well -->
                <div class="card border-dark ml-3 my-4" style="max-width: 22rem;">
                    <div class="card-header">Blog Categories</div>
                    
                   <div class="card-body">
                        <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <?php 
                                    $query = 'SELECT * FROM categories LIMIT 4';
                                    $slect_allcat_query = $conn->query($query);

                                    while($row = $slect_allcat_query->fetch_assoc()){
                                        $cat_title = $row['cat_title'];
                                        echo "<li><a class='card-link' href='#'>{$cat_title}</a></li>";
                                    ?>
                               
                                
<!--
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
-->
                                
                                 <?php } ?>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                                <li><a class="card-link" href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                    </div>
                    
                </div>

                <!-- Side Widget card -->
                <div class="card border-dark ml-3" style="max-width: 22rem;">
                    <div class="card-header">Side Widget Card</div>
                    <div class="card-body text-dark"> 
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.row -->