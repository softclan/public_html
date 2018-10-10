<?php

  

   if(isset($_GET['user_search'])) {

    $query_string = $_GET['user_search'];

    $posts =user_search_post_by_query($query_string);

  } else if (isset($_GET['page'])) { //check navigation for logic
    $page = $_GET['page'];
    $start = 1 + ($page - 1 ) * 3;
   // var_dump($start);
   // exit();
    $posts = user_find_all_featured_posts($start);
  }
  else {
     
    $posts = user_find_all_featured_posts();
  }

?>

<h3 class="btn-lp" rel="scroll">Featured Posts</h3>
               
         
     <?php while ($post = mysqli_fetch_assoc($posts))  { ?>  

    <li>
        <b class="category-label"><?php echo $post['FirstTag'] ?></b>
        <i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i><i class='fa fa-angle-right'></i>
       <i class="fa fa-newspaper-o"></i>&nbsp;&nbsp;<a href="<?php echo "./" . h(u($post['TitleSlug'])) ; ?>"><?php echo $post['Title'] ?></a> 
       <br>

   </li>

   <?php } ?>
   