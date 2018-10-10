<hr>

<div class='paginate'>
<?php 
  
  $start = isset($_GET['page'])? $_GET['page']  : 1;
  $next = $start + 1;
  $previous = $start - 1 ;
  //four posts per loop AP  T = start + (start - 1)divisor - 1
  //Logic select where ID >= T, limit divisor
  $limit = floor(user_find_all_featured_post_count() / 4);
  $count = 0;
  if($start > 1) {

  		echo "<a href=\"index.php?page=$previous\" class=\"btn btn-success btn-md\">Previous </a>";
  	}
  while($start < $limit) {


    $start++;
  	echo "<a href=\"index.php?page=$start\" class=\"btn btn-success btn-md\">$start</a>";
  	$count++;

  	if($count >= 4 && $start < $limit) {
  		echo'  ...' . "<a href=\"index.php?page=$limit\" class=\"btn btn-success btn-md\">$limit</a>";
  		echo "<a href=\"index.php?page=$next\" class=\"btn btn-success btn-md\">Next</a>";
  		break;
  	}


  }


?>

</div>