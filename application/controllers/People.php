<?php

class People extends CI_Controller {
    
    public function index()
    {
        
        $data['judul'] = 'List of People';
        
        $this->load->model('People_model', 'people');
        $data['people'] = $this->people->getAllPeople();

        $data['people'] = $this->people->getPeople(12, 30);

        $this->load->view('templates/header',$data);
        $this->load->view('people/index', $data);
        $this->load->view('templates/footer');
    }

    
}