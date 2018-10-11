<?php
  require_once('../../private/initialize.php');

  $time ='';

  if(isset($_GET['admin_search_text'])) {

    $query_string = $_GET['admin_search_text'];

    $posts =admin_search_post_by_query($query_string);

  } 
  else if(isset($_GET['admin_search_time'])) {

    $time = $_GET['admin_search_time'];

    if( $time == 'day') {

      $posts = admin_find_all_posts_by_one_day();

    }else if( $time == 'week') {

      $posts = admin_find_all_posts_by_one_week();
      
    }else if( $time == 'month') {

      $posts = admin_find_all_posts_by_one_month();
      
    }else  {

      $posts = admin_find_all_posts_by_one_year();
      
    }



  }else {
     
      $posts = admin_find_all_posts();
  }  

?>
<?php require_once( SHARED_PATH .'/admin_html_header.php'); ?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
           <?php require_once( SHARED_PATH .'/admin_header.php'); ?>
        <!-- END HEADER DESKTOP-->
        <!-- HEADER MOBILE-->
            

<!-- PAGE CONTENT-->
       
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">100</h2>
                                <span class="desc">posts</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">23</h2>
                                <span class="desc">members</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-people"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">133</h2>
                                <span class="desc">posts shared</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">&#8358; 1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="get">
                                    <input class="au-input--w300 au-input--style2" name="admin_search_text"type="text" placeholder="Search post by Title">
                                    <button class="au-btn--submit2" type="submit">
                                       <a href="<?php echo url_for('admin/index.php'); ?>"> <i class="zmdi zmdi-search"></i> </a>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->



            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">POSTS</h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                                <form class="au-form-icon--sm" action="" method="get">
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select2" name="admin_search_time">
                                            <option  value="day" <?php echo $time =='day' ?'selected' : '' ?> >Last One Day</option>
                                            <option value="week" <?php echo $time =='week' ?'selected' : '' ?> >Last One Week</option>
                                            <option value="month" <?php echo $time =='month' ?'selected' : '' ?> >Last One Month</option>
                                            <option value="year" <?php echo $time =='year' ?'selected' : '' ?> >Last One Year</option>
                                        </select>
                                    </div>
                                    <button class="au-btn-filter">
                                        <i class="zmdi zmdi-filter-list"></i>All Posts</button>
                               </form>
                                </div>
                                <div class="table-data__tool-right">
                                    <a href="<?php echo url_for('admin/new_post.php'); ?>">
                                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>Create new Post</button>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                    <th>ID</th>
                                            </th>
                                            <th>Title</th>
                                             <th>Category</th>
                                            <th>visible</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                              >
                              <?php while( $post =  mysqli_fetch_assoc($posts)) {   ?> 
                                        <tr class="tr-shadow">
                                            <td></td>
                                            <td>
                                                <span class="block-email"><?php echo $post['PostID']?></span>
                                            </td>
                                            <td class="desc"><?php echo $post['Title'] ?></td>
                                            <td class="desc"><?php echo $post['Category'] ?></td>
                                            <td>
                                                <span class="<?php echo $post['Visible']== 1 ? '' : 'status--denied' ?>"><?php echo $post['Visible']== 1 ? 'True' : 'False' ?></span>
                                            </td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="view">
                                                        <a href="<?php echo url_for('admin/view_post.php?id=' . h(u($post['PostID'])) ); ?>" target="_blank"><i class="zmdi zmdi-mail-send"></i> </a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <a href="<?php echo url_for('admin/edit_post.php?id=' . h(u($post['PostID'])) ); ?>"><i class="zmdi zmdi-edit"> </i></a>
                                                    </button>
                                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <a href="<?php echo url_for('admin/delete_post.php?id=' . h(u($post['PostID'])) ); ?>"><i class="zmdi zmdi-delete"></i></a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                              
                                <?php }   ?>
                  

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Oprextra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->