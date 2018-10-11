 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="<?php echo url_for_index('/') ?>">Oprextra</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="post.html">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo url_for_index('/posts/login.php') ?>">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo url_for_index('/posts/register.php') ?>">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>