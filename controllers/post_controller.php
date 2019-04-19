<?php
class PostController {
    public function readAll() {
       $posts = Post::all();
      require_once('views/posts/readAll.php'); 
    }
    
}