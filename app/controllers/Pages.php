<?php

class Pages {
    public function __construct(){
        //echo 'Pages loaded';
    }

    public function index(){
        echo 'Index page';
    }


    public function about($id){
        //echo 'About loaded';
        echo $id;
    }
}