<?php

   $posts = user_find_all_headline_posts();

?>

 <h3 class="btn-lp" rel="scroll">Headlines</h3>

<div class="content-light headlines" id="most-viewed">

<?php while ($post = mysqli_fetch_assoc($posts))  { ?>  
   <ul>
         <li><a href="<?php echo "./" . h(u($post['TitleSlug'])) ?>"><span class="text"><?php  echo $post['Title'] ?></span></a></li>
         <li><i>in <?php echo $post['FirstTag'] ?></i> 

 </ul>

   <?php } ?>