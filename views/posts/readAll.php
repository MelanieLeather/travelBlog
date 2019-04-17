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
                            </p>
                        <?php } ?>
                            
                          
               
    </body>
</html>