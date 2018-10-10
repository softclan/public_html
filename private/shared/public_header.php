

<!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <!-- Time -->
                        <div class="social">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://oprextra.com" target="_blank" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                            <!--Twitter-->
                            <a href="https://twitter.com/intent/tweet?url=https://oprextra.com"  target="_blank" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>

                            <a href="whatsapp://send?text=https://oprextra.com/0" target="_blank" class="icons-sm wa-ic"><i class="fa fa-whatsapp"></i></a>

                            
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="<?php echo index_for('index.php'); ?>" style="color: #222; text-decoration: none;"><h1>Oprextra</h1></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                    class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form role="form" accept="<?php echo url_for('admin/index.php'); ?>">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="user_search"
                                                           placeholder="Search for Post"> <span class="input-group-btn">
                                                            <button class="btn-default">Search</button>
                                                                        </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->
