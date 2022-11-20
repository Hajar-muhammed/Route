<?php
Class Image{
     private $error = false;
     
    public function __construct()
    {
        if(isset($_POST['submit'])){
            $this->name = $_POST['name'];
            if($_FILES && $_FILES['img']['name']){
            $this->image = $_FILES['img'];
            $this->image_name = $this->image['name'];
            $this->image_tmpname = $this->image ['tmp_name'];
                
            }
            else {
                $this->error = true;
            }
        } else {
            $this->error = true;
        }
        
        
  
    
    }

    public function validate()
    {
        if($this->error != true){
        $this->ext = strtolower(pathinfo($this->image_name, PATHINFO_EXTENSION)) ;
        if(in_array($this->ext, ['png' , 'jpg' , 'jpeg' , 'gif']) ){
            $this->valid= true;
              
        }else{
            $this->valid= false;
        }
    }
      return $this;
    
}

    public function rename()
    {
        if($this->error != true){
        $this-> newName = $this->name .".".$this->ext;
     
           }   return $this;
    }
    public function upload()
         { 
       if($this->error != true){
          if($this->valid == true){
            move_uploaded_file($this->image_tmpname, "uploads/$this->newName");
            return "image uploded succesfuly";
          
    
         }else{  
            return "error founded, you must select an image";
        }
     }
}
    
}
