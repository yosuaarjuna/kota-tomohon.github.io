<?php

class Testimonial extends Controller{
    public function index(){
        $data['judul']='Testimonial';
        $data['content'] = $this->model('Content_model')->getContent('Testimonial1')[0]['Content'];
        $data['content'] = $this->model('Content_model')->getContent('Testimonial2')[0]['Content'];
        $data['content'] = $this->model('Content_model')->getContent('Testimonial3')[0]['Content'];
        $this->view('templates/header', $data);
        $this->view('testimonial/index', $data);
        $this->view('templates/footer', $data);
    }
    
}