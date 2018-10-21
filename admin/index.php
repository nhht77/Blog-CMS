<?php include 'includes/header.php' ?>
<?php include 'includes/navigation.php' ?>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <?php include 'includes/headerTag.php' ?>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
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
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 203</h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 12</h2>
                    <h4>Pages</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 33</h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 12,334</h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                      </tr>
                      <tr>
                        <td>Jill Smith</td>
                        <td>jillsmith@gmail.com</td>
                        <td>Dec 12, 2016</td>
                      </tr>
                      <tr>
                        <td>Eve Jackson</td>
                        <td>ejackson@yahoo.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>John Doe</td>
                        <td>jdoe@gmail.com</td>
                        <td>Dec 13, 2016</td>
                      </tr>
                      <tr>
                        <td>Stephanie Landon</td>
                        <td>landon@yahoo.com</td>
                        <td>Dec 14, 2016</td>
                      </tr>
                      <tr>
                        <td>Mike Johnson</td>
                        <td>mjohnson@gmail.com</td>
                        <td>Dec 15, 2016</td>
                      </tr>
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
