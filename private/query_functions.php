<?php

  // Subjects
  
  function add_post($title, $title_slug,$visible,$content, $first_tag, $second_tag, $third_tag, $category ) {

   // log_input($title, $title_slug,$visible,$content, $first_tag, $second_tag, $third_tag, $category);


    global $db;
    $stmt = mysqli_prepare($db, "INSERT into posts(Title, TitleSlug, Visible, Content, FirstTag, 
      SecondTag, ThirdTag, Category, UserID) VALUES(?, ?, ?, ?, ?, ?,?, ?, 1)");

    mysqli_stmt_bind_param($stmt, "ssisssss", $title,$title_slug, $visible,$content, $first_tag, $second_tag, $third_tag, $category );
   $result =  mysqli_stmt_execute($stmt);
   return $result;



  }

  function update_post($post_id, $title, $title_slug, $visible, $content, $first_tag, $second_tag, $third_tag, $category ) {

    global $db;
    $stmt = mysqli_prepare($db, "UPDATE posts SET Title = ?, TitleSlug = ?, Visible = ?, Content = ?, FirstTag = ?, SecondTag = ?, ThirdTag = ?, Category = ? WHERE PostID = ? limit 1");

    mysqli_stmt_bind_param($stmt, "ssisssssi", $title, $title_slug,$visible, $content, $first_tag, $second_tag, $third_tag, $category, $post_id );
   $result =  mysqli_stmt_execute($stmt);
   return $result;



  }

  function delete_post($post_id) {

    global $db;
    $stmt = mysqli_prepare($db, "UPDATE posts set DeletePost = 1 WHERE PostID = ? limit 1");

    mysqli_stmt_bind_param($stmt, "i", $post_id );
   $result =  mysqli_stmt_execute($stmt);
   return $result;



  }



  function user_find_all_featured_posts($start = 1) {
    global $db;

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE Category = 'Featured' AND Visible = true AND DeletePost = false ORDER BY PostID DESC LIMIT 10");
       //mysqli_stmt_bind_param($stmt, "i", $start);
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }

  function user_find_all_featured_post_count() {
    global $db;

      $stmt = mysqli_prepare($db, "SELECT COUNT(*) as Count FROM posts");
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      $count = mysqli_fetch_assoc($result_set);

      return $count['Count'];
  }


  function user_find_all_headline_posts($order = "DESC") {
    global $db;

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE  Category = 'Headline' AND Visible = true AND DeletePost = false ORDER BY PostID " . $order);
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }

 

  function admin_find_all_posts($order = "DESC") {
    global $db;

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE  DeletePost = false ORDER BY PostID " . $order);
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }

  function admin_find_all_posts_by_one_day() {
    global $db;

      $stmt = mysqli_prepare($db, " SELECT * FROM posts WHERE `EntryDate` >= DATE_SUB(now(), INTERVAL 1 DAY)");
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }

  function admin_find_all_posts_by_one_week() {
    global $db;

      $stmt = mysqli_prepare($db, " SELECT * FROM posts WHERE `EntryDate` >= DATE_SUB(now(), INTERVAL 1 WEEK)");
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }
  function admin_find_all_posts_by_one_month() {
    global $db;

      $stmt = mysqli_prepare($db, " SELECT * FROM posts WHERE `EntryDate` >= DATE_SUB(now(), INTERVAL 1 MONTH)");
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }
  function admin_find_all_posts_by_one_year() {
    global $db;

      $stmt = mysqli_prepare($db, " SELECT * FROM posts WHERE `EntryDate` >= DATE_SUB(now(), INTERVAL 1 YEAR)");
      
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;
  }
   
  function admin_search_post_by_query($query_string){

    global $db;
      
    $query_string = "%$query_string%";
       
    $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE Title like ? AND DeletePost = false  ORDER BY PostID DESC");

    mysqli_stmt_bind_param($stmt, "s", $query_string);
    mysqli_stmt_execute($stmt);

    $result_set = mysqli_stmt_get_result($stmt);

    return $result_set;

  }

  function user_search_post_by_query($query_string){

    global $db;
      
    $query_string = "%$query_string%";
       
    $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE Title like ? AND Visible = true  AND  DeletePost = false ORDER BY PostID DESC LIMIT 4");

    mysqli_stmt_bind_param($stmt, "s", $query_string);
    mysqli_stmt_execute($stmt);

    $result_set = mysqli_stmt_get_result($stmt);

    return $result_set;

  }



  function user_find_post_by_id($post_id){

    global $db;

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE Visible = true AND DeletePost = false AND PostID = ?");
      mysqli_stmt_bind_param($stmt, "i", $post_id);
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);

      return $result_set;

  }

  function post_exist($post_slug){

    global $db;

    

      $stmt = mysqli_prepare($db, "SELECT PostID FROM posts WHERE  DeletePost = false AND TitleSlug = ?");
      mysqli_stmt_bind_param($stmt, "s", $post_slug);
      mysqli_stmt_execute($stmt);

       mysqli_stmt_store_result($stmt);
       $rows = mysqli_stmt_num_rows($stmt);
      
   
      if($rows == 0) {
  
          return false;
      }
      return true;
      

  }

  function find_post_by_slug($post_slug){

    global $db;

    

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE  DeletePost = false AND TitleSlug = ?");
      mysqli_stmt_bind_param($stmt, "s", $post_slug);
      mysqli_stmt_execute($stmt);

       $result_set = mysqli_stmt_get_result($stmt);

       $post = mysqli_fetch_assoc($result_set);

       return $post;


      

  }


  function admin_find_post_by_id($post_id){

    global $db;

      $stmt = mysqli_prepare($db, "SELECT * FROM posts WHERE  DeletePost = false AND PostID = ?");
      mysqli_stmt_bind_param($stmt, "i", $post_id);
      mysqli_stmt_execute($stmt);

      $result_set = mysqli_stmt_get_result($stmt);
      $result = mysqli_fetch_assoc($result_set) ;

      return $result;

  }

  function check_email_query($UserEmail){
    global $db;

    $check = "SELECT * FROM users WHERE UserEmail='$UserEmail'";
  $run_query = mysqli_query($db,$check);
  }




?>
