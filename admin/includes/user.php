<?php


class User{
    
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    
    public static function find_all_users(){
      return self::find_this_query("select * from users");
        
    }
    
     public static function find_users_id($user_id){
       global $database; 
        
       $result_set_id = self::find_this_query("select * from users where id = $user_id LIMIT 1");
       $found_user = mysqli_fetch_array($result_set_id);
       return $found_user;
        
    }
    
    public static function find_this_query($sql){
        global $database;
        $result_set = $database->query($sql);
        return $result_set;
        
    }
    
    
    
    
    
    
    
}



//STIGLA DO 05 USER CLASS - 042 AUTO INSTANTIATION METHOD







?>