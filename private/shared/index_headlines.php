<?php

   $posts = user_find_all_headline_posts();

?>

 

<div class="content-light headlines" id="most-viewed">

<?php while ($post = mysqli_fetch_assoc($posts))  { ?>  
 
 
 <div class="post-preview">
           <a href="<?php echo "./" . h(u($post['TitleSlug'])) ?>">
              <h5 class="post-title">
                <?php  echo $post['Title'] ?>
              </h5>
              
            </a>
          </div>
          <hr>

   <?php } ?>