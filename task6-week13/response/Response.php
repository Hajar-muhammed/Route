<?php

class Response {
    public function __construct()
    {
        $this->conn = mysqli_connect("localhost" , "root", "", "blog-sun");
        header("Content-Type:application/json;charset-utf8");
        header('access-control-allow-origin:*');

    }
    public function error ($msg, $code){
          echo json_encode($msg) ;
         http_response_code($code); 
     }
     public function success ($data, $code = 200){
        print_r($data); 
       http_response_code($code); 

     }


    public function select($table, $where, $cond = "*")
    {
        $query = "SELECT $cond FROM $table where $where";
        $result = mysqli_query($this->conn, $query);
        if(mysqli_num_rows($result)  >0){
        $posts = json_encode( mysqli_fetch_all($result, MYSQLI_ASSOC));
         $this->success($posts);
        }else{
          $this->error("no data founded", 404);

        }
    }
}