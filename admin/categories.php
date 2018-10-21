<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Categories <small>Manage Blog Categories</small></h1>
          </div>
          <?php include 'includes/headerTag.php' ?>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Categories</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
        <?php include 'includes/sidebar.php' ?>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Categories</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Categories...">
                      </div>
                </div>
                <br>
                <?php $query = 'SELECT * FROM categories LIMIT 4';
                      $select_cat_query = $conn->query($query); ?>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th></th>
                      </tr>
                  <?php 
                  while($row = $select_cat_query->fetch_assoc()){
                      $cat_title = $row['cat_title'];
                      $cat_id = $row['cat_id'];

                      echo "<tr>";
                      echo "<td>{$cat_id}</a></td>";
                      echo "<td>{$cat_title}</a></td>";
                      echo "<td><a class='btn btn-default' type='button' data-toggle='modal' data-target='#addCategories'>Edit</a> <a class='btn btn-danger' href='#'>Delete</a></td>";
                      echo "</tr>";
                  } ?>
                </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <?php include 'Modals/addPost.php' ?>
    <?php include 'Modals/addCategories.php' ?>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
