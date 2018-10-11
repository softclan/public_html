<?php 

require_once('../../private/initialize.php');

  $post_id = isset($_GET['id']) ? $_GET['id'] : Null  ;

  if($post_id) {  
    $post = admin_find_post_by_id($post_id);
  } else {
     redirect_to(url_for('admin/index.php'));
  }

  
?>

<?php require_once(SHARED_PATH .'/public_html_header.php'); ?>
<body id="page-top" data-spy="scroll" data-target=".navbar">
  <?php require_once(SHARED_PATH .'/public_header.php'); ?>
  <?php require_once(SHARED_PATH .'/public_navigation_header.php'); ?>     


                                  
                        
<div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $post['Title'] ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Daltimore</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <?php
           
           $date = new DateTime($post['EntryDate']);
           

         ?>
        
        <p><?php echo 'Posted ' . date_format( $date, '\o\n l jS F\, Y  \a\t g:ia '); ?> </p>

        <hr>



        <!-- Preview Image -->
        
     
        <!-- Post Content -->
        <?php 
         $allowed_tags = '<div><img><h1><h2><p><br><strong><em><hr><a>';
        echo strip_tags($post['Content'], $allowed_tags);
        ?>
        <hr>



        

          <div class="panel-heading">Share this post on: 
            
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://nnu.ng/0" target="_blank"><i class="fab fa-facebook-square fa-2x"></i> </a>
            <a href="https://twitter.com/intent/tweet?url=https://nnu.ng/0" target="_blank">
      <i class="fab fa-twitter-square fa-2x" style="color: #00aced;"></i>
      </a>
      <a href="whatsapp://send?text=https://nnu.ng/0" data-action="share/whatsapp/share" target="_blank" style="color: green;"><i class="fab fa-whatsapp fa-2x"></i></a>
        </div>

        <!-- Single Comment -->
        <div class="container">
            <div class="row">
              <div class="col-md-8">
                <h2 class="page-header">Reactions</h2>
                  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "<?php echo "https://oprextra.com/admin/" .$post['TitleSlug'] ?>"; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "<?php echo $post['PostID'] ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://oprextra-co.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                  </section>
              </div>
            </div>
          </div>
          

    
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

 

    <footer id="footer_section" class="footer_section">
        <div class="container">
            <hr class="footer-top">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer_widget_title"><h3><a href="category.html" target="_self">Oprextra</a></h3></div>
                    <div class="logo footer-logo">
                        <a title="fontanero" href="index.html">
                            
                        </a>
    
                        <p>Competently conceptualize go forward testing procedures and B2B expertise. Phosfluorescently
                            cultivate principle-centered methods.of empowerment through fully researched.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer_widget_title">
                        <h3><a href="category.html" target="_self">Discover</a></h3>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <ul class="list-unstyled left">
                                    <li class="active"><a href="index.html">Breaking News</a></li>
                                    <li><a href="blog.html">Trending</a></li>
                                    <li><a href="blog.html">Entertainment</a></li>
                                    <li><a href="blog.html">Lastest Post</a></li>
                                    <li><a href="blog.html">Design</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="footer_bottom_Section">
            <div class="container">
                <div class="row">
                    <div class="footer">
                        <div class="col-sm-3">
                            <div class="social">
                                <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                <!--Twitter-->
                                <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                <!--Instagram-->
                                <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <p>&copy; Copyright 2018 - Oprextra</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
       </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="sitefront/js/jquery.min.js"></script>
<script src="sitefront/js/jquery.smooth-scroll.js"></script>


</body>
</html>

