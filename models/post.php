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
    public $image_name;
        
    public function __construct($title) {
        $this->title=$title;
       
    }
    
//    ,$body,$id, $published, $image_name
//             $this->body=$body;
//        $this->id=$id;
//        $this->title=$published;
//        $this->image=$image;
//    public function __construct($id, $user_id, $title, $body, $published, $created_at, $updated_at, $category_id){
//        $this->id=$id;
//        $this->user_id= $user_id;
//        $this->title=$title;
//        $this->body=$body;
//        $this->published=$published;
//        $this->created_at=$created_at;
//        $this->updated_at=$updated_at;
//        $this->category_id=$category_id;
//    }
    
    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query("Call read_all_posts()");
      // we create a list of Product objects from the database results

       foreach($req->fetchAll() as $post) {
          $list[] = new Post($post['title']); 

         
       }
      return $list;
   
    }
}
    