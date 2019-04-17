<?php
class Post {
    public $id;
    public $user_id;
  
    public $body;
    public $published;
    public $created_at;
    public $updated_at;
    public $category_id;
    public $first_name;
    
    
     
    public $title;
    public $price;

    public function __construct($title) {
      $this->title    = $title;
      
    }
    
//    public function _construct($id, $user_id, $title, $body, $published, $created_at, $updated_at, $category_id){
//        $this->id=$id;
//        $this->user_id= $user_id;
//        $this->title=$title;
//        $this->body=$body;
//        $this->published=$published;
//        $this->created_at=$created_at;
//        $this->updated_at=$updated_at;
//        $this->category_id=$category_id;
//    }
//    
//    public function _construct ($title) {
//        $this->title=$title;
//        
//    }
//    public static function all() {
//       $list = [];
//      $db = Db::getInstance();
//  
//   $req = $db->query('SELECT title, id FROM post');
//     
//      // we create a list of Product objects from the database results
//      foreach($req->fetchAll() as $post) {
//        $list[] = new post($post['id'], $post['user_id'], $post['title'], $post['body'], $post['published'], $post['created_at'], $post['updated_at'], $post['category_id']);
//      }
//      return $list;
//    }
    
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT title FROM post');
      // we create a list of Product objects from the database results

       foreach($req->fetchAll() as $post) {
          $list[] = new Post($post['title']); 

         
       }
      return $list;
   
    }
}
    