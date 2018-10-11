<?php require_once('./private/initialize.php') ?>
<?php require_once(SHARED_PATH. '/index_html_header.php') ?>

  <body>

   <?php require_once(SHARED_PATH. '/index_navigation_header.php') ?>


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('./posts/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Oprextra Income</h1>
              <span class="subheading">Get in on latest updates</span>
               <span class="subheading">Earn while reading and sharing posts!</span>
            </div>
          </div>
        </div>
      </div>
    </header>

     <div class="input-group  col-md-6 text-center" style="left: 20%">
        <input type="text" class="form-control">
        <div class="input-group-append">
          <button class="btn-sm btn-success">Search</button>
        </div>
      </div>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
        
            <?php echo require_once(SHARED_PATH . '/index_headlines.php') ?>
          <hr>
          

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <ul class="list-inline text-center">
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                </a>
              </li>
            </ul>
            <p class="copyright text-muted">Copyright &copy; Oprextra 2018</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="js/clean-blog.min.js"></script>

  </body>

</html>
