<?php

class About extends Controller{
    public function index(){
        $data['judul']='ABOUT US';
        $data['content'] = $this->model('Content_model')->getContent('About')[0]['Content'];
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    
}