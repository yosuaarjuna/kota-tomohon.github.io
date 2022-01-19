<?php

class Wisata extends Controller{
    public function index(){
        $data['judul']='Wisata';
        $data['content'] = $this->model('Content_model')->getContent('Wisata')[0]['Content'];
        $this->view('templates/header', $data);
        $this->view('wisata/index', $data);
        $this->view('templates/footer', $data);
    }
    
}