<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();
        
        // Controller
        if($url == null) $url = [$this->controller];

        if(file_exists('../app/controllers/' . $url[0] . '.php')){ // Jika folder nya ada, maka akan tampil
            $this->controller = $url[0];
            unset($url[0]); // Hapus url index ke 0 dari array
        } // Jika tidak ada maka akan selalu di defaultnya yaitu home/about 

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Methodnya
        if(isset($url[1])){
            $this->method = $url[1];
            unset($url[1]);
        }

        // Params
        if(!empty($url)){
            $this->params = array_values($url);
        }

        // Jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array(array ($this->controller, $this->method ), $this->params);
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        }
        else{
            $url = [$this->controller];
            return $url;
        }
    }
}