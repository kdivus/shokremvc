<?php
<<<<<<< HEAD

class Pages extends Controller {
    public function __construct(){
        
    }

    public function index(){
        $data = ['title' => 'Welcome'];
        $this -> view('pages/index', $data);
    }


    public function about(){
        $this -> view('pages/about');
=======
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
      
    }

    public function about($id){
      echo $id;
>>>>>>> c31d424f1c8454a803064d4d76d619fa06e84f64
    }
  }