<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>list of all posts</h1>
  

   <?php foreach ($posts as $post) { ?>
     <p>  <td>   <?php echo $post->title; ?> </td>
   <a href='' class='btn btn-primary'>Read More</a>
    <a href='' class='btn btn-primary'>Update</a>
   <a href='' class='btn btn-primary'>Delete</a>
</p>
                        <?php } ?>
                            
   <a href='' class='btn btn-primary'>Create new article</a>
  
               
    </body>
</html>