<?php require_once('./private/initialize.php') ?>
<?php require_once(SHARED_PATH .'/index_html_header.php'); ?>

<body id="page-top" data-spy="scroll" data-target=".navbar">

  <?php require_once(SHARED_PATH .'/public_header.php'); ?>
  <?php require_once(SHARED_PATH .'/public_sub_header.php'); ?>      


    <div class="container">
        
            <div class="col content-middle col-75">
        <div class="content-dark">
            
            <div class="content-light">
                
                <!--posts -->
                  <ul class="forum-cat">

                <?php require_once(SHARED_PATH .'/public_posts.php'); ?>  

                <?php require_once(SHARED_PATH .'/public_navigation.php'); ?>
                       
                  </ul>
                
            </div>

         

            <!-- Headlines -->
 
   <?php 
         
         if(!isset($query_string)) {
            
            require_once(SHARED_PATH .'/public_headlines.php');
         }
         else {
            // need this div to keep adverts in place
            echo "<div class=\"content-light headlines\" id=\"most-viewed\">";
         }

    
   ?>            

 
                                     
                   


               
            </div>

        </div>
    </div>
                
            <aside class="col col-30 sidebar sidebar-right">
    <div class="content-dark">
        <h4>Sponsored ads</h4>
                                                                                                    <div class="widget">
            <!--a href="c.jumia.io/?a=102624&c=624&p=r&E=kkYNyk2M4sk%3d&utm_source=cake&utm_medium=affiliation&utm_campaign=102624&utm_term=" target="_blank">
                <img src="https://affiliates.jumia.com/banners/Jumia Nigeria/EverythingonJumia/320x480.jpg"/></a-->
                        </div>
                        <br>
         <div class="widget">
                        <a href="com/article/12505"><img src="#"/></a>
                        </div>
                        <br>
                                                        
    </div>
</aside>  

                
            <aside class="col col-30 sidebar sidebar-right">
    <div class="content-dark">
        <h4>Sponsored</h4>
                                                                                                    <div class="widget">
<a href="wqwqwqw" target="_blank">
<div class="ad" style="border: 1px #31a931 solid; margin-bottom:15px; width: 100%;" >
<img src="info/addimages/201803192305353741levcon_advirtisement.png"  style="width:100%;">
</div>
</a>
  
                        </div>
                        <br>
                                                                                                                                <div class="widget">
                         <!--a href="https://blogsng.com/" target="_blank">
<img src="#" /></a-->
                        </div>
                        <br>
                                                        
    </div>
</aside>  
                
     </div>    
<!--end of index.php-->



 

 <?php require_once(SHARED_PATH .'/public_top_footer.php'); ?>
 <?php require_once(SHARED_PATH .'/public_footer.php'); ?>

    