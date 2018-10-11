<?php 

require_once('../../private/initialize.php');
require_once('../../private/validate_posts.php');

  $post_id =  $_GET['id'] ?? '';
  if($post_id) {
     
    $post = admin_find_post_by_id($post_id);
    $title = $post['Title'];
    $content = $post['Content'];
    $visible = $post['Visible'];
    $first_tag = $post['FirstTag'];
    $second_tag = $post['SecondTag'];
    $third_tag = $post['ThirdTag'];
    $category = $post['Category'];

    //log_input($title, $visible,$content, $first_tag, $second_tag, $third_tag );

  //exit();


  }elseif(is_post_request()) {

    $post_id = $_POST['post_id'];
    $title =  $_POST['post_title'];
    $visible = $_POST['post_visible'];
    $content = $_POST['post_content'];
    $first_tag = $_POST['first_tag'];
    $second_tag = $_POST['second_tag'];
    $third_tag = $_POST['third_tag'];
    $category = $_POST['post_category'];
     

     //log_input($title, $visible,$content, $first_tag, $second_tag, $third_tag, $post_id );

    

    if($post_id) {
    
    $result = delete_post($post_id);



    redirect_to(url_for('/admin/index.php'));

   }
   else {

     // error arrays here
   }


    //update_post($post_id);

  } else {
    
    redirect_to(url_for('index.php'));

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
                                        <li class="list-inline-item">Create Post</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Delete
                                <span>Post</span>
                            </h1>
                            <hr class="line-seprate">
                            <div class="container-contact100">

                                <form method="post" action="<?php echo url_for('admin/delete_post.php'); ?>" >
                                    <div class="form-row">
                                      <div class="form-group col-md-6">
                                        <label for="post_title">Post Title</label>
                                        <input type="text" class="form-control" name="post_title" placeholder="Enter Post Title" value="<?php echo $title ?>" disabled="disabled">
                                      </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="form-check">
                                        <input type="hidden" name="post_id" value="<?php echo $post_id ?>"  />
                                          <input type="hidden" name="post_visible" value="0"  />

                                          <input class="form-check-input" type="checkbox" name="post_visible"id="post_visible" value="1" <?php echo $visible == 1 ? 'checked' : '' ?> disabled="disabled">
                                          <label class="form-check-label" for="post_visible">
                                            Visible
                                          </label>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="post_category">Select Post Category</label>
                                        <select class="js-select2" name="post_category" disabled="disabled">
                                            <option  value="Featured" <?php echo $category == 'Featured' ? 'selected': '' ?> >Featured</option>
                                            <option value="HeadLine" <?php echo $category == 'Headline' ? 'selected': '' ?> >Headline</option>
                                            
                                        </select>
                                      </div>
                                    <div class="form-row col-md-12">
                                      <div class="form-group col-md-2">
                                        <label for="first_tag">Post Tags</label>
                                        <input type="text" name="first_tag" class="form-control" id="first_tag" value="<?php echo $first_tag ?>" disabled="disabled">
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="second_tag">Post Tags</label>
                                        <input type="text" name="second_tag" class="form-control" id="second_tag" value="<?php echo $second_tag ?>" disabled="disabled">
                                      </div>
                                      <div class="form-group col-md-2">
                                        <label for="third_tag">Post Tags</label>
                                        <input type="text" name="third_tag" class="form-control" id="third_tag" value="<?php echo $third_tag ?>" disabled="disabled">
                                      </div>
                                      
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="post_content">Content</label>
                                        <textarea name="post_content" id="post_content" class="form-control" placeholder="" style="height: 200px;" disabled="disabled"><?php echo $content ?>
                                        </textarea>
                                        

                                    </div class="col-md-6 offset-3">
                                    <button type="submit" class="btn btn-success">Delete</button>
                                  </form>
                                  </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Oprextra. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

    
</body>

</html>
<!-- end document-->