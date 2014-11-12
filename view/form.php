<?php 
   require_once(__DIR__ . "/../model/config.php");
?>
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
   <!-- this for title -->
   <!-- label-text that displayed in front of the text line -->
   <!-- label is for title -->
     <div>
         <label for="title">Title </label>
         <input type="text" name="title"/>
    </div>
  <!-- holds our info for our post -->
  <!-- textarea lets us type as many sentences as we can -->
  <!-- spans up more than one line -->
    <div>
         <label for="post">Post: </label>
         <textarea name="post"></textarea>
    </div>
    <!-- a button to submit -->
    <div>
    	<button type="submit">Submit</button>
    </div>
</form>