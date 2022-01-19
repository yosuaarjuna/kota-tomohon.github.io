<?php

class ContactUs extends Controller{
    public function index(){
        $data['judul']='Contact Us';
        $data['content'] = $this->model('Content_model')->getContent('Contact Us')[0]['Content'];
        $this->view('templates/header', $data);
        $this->view('contact us/index', $data);
        $this->view('templates/footer', $data);
    }
    
}