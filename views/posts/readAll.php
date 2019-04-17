<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>list of all posts</h1>
  
  
   <?php foreach ($posts as $posts) { ?>
                        <p>  <td>   <?php echo $posts->title; ?> </td>
                            </p>

                        <?php } ?>
    </body>
</html>