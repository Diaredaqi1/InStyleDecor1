<?php 
//this method only connects to the database and get the data
class ViewUsers extends User {
    public function showAllUsers(){
     $datas = $this -> getAllUsers();
     foreach($datas as $data){
        
        echo $data['username']."</br>";
     }
    }
}
