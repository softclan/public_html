<?php 
require_once('validation_functions.php'); 

function validate_post($title, $visible,$content, $first_tag, $second_tag,
 $third_tag, $category) {

    $errors = [];

    //title 80 > 20 < 80
    //tags  30 > 2 < 30
    //second and third tags can be empty
    //visible either 0 || 1
    //content > 30

   if(has_length_greater_than($title, 80) || has_length_less_than($title, 20) ) {
        
        $errors ['title']= "Posts title should have between 20 to 80 characters";
   }
   if(has_length_less_than($content, 30) ) {
        
        $errors ['content']= "Content should be at least 30 characters long";
   }
   if(has_length_greater_than($first_tag, 30) || has_length_less_than($first_tag, 2) ) {
        
        $errors ['first_tag']= "Post tag should have between 2 to 30 characters";
   }
   if(has_length_greater_than($second_tag, 30) || has_length_less_than($second_tag, 2) && !is_blank($second_tag) ) {
        
        $errors ['second_tag']= "Post tag should have between 2 to 30 characters";
   }
   if(has_length_greater_than($third_tag, 30) || has_length_less_than($third_tag, 2) && !is_blank($third_tag) ) {
        
        $errors ['third_tag']= "Post tag should have between 2 to 30 characters";
   }

   if(has_exclusion_of($visible, [0,1])) {

   	  $errors ['visible']= "Visible should either be checked or unchecked";
   }

   if(has_exclusion_of($category, ['Featured','Headline'])) {

      $errors ['category']= "Category can either be Featured or Headline";
   }


   return empty($errors) ? true : $errors;
   


}



?>