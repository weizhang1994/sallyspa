<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){

      $data = [
        'title' => 'SallySpa',
        'description' => 'Simple Spa websites build on the buttorMVC PHP framework'
      ];
     
      $this->view('pages/index', $data);
    }

    public function blog(){
      if(isLoggedIn()){
        redirect('posts');
      }
      
      $data = [
        'title' => 'blog',
      ];
     
      $this->view('pages/blog', $data);
    }
  }