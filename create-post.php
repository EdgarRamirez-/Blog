<?php
 //*  two variables that submit data
//* filter validates sanitizes t make sure there are no mailicios things
  $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
  $post = filter_input(INPUT_POST,"post", FILTER_SANITIZE_STRING );

   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";