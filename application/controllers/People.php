<?php

class People extends CI_Controller {
    
    public function index()
    {
        
        $data['judul'] = 'List of People';
        
        $this->load->model('People_model', 'people');
        $data['people'] = $this->people->getAllPeople();

        //load library
        $this->load->library('pagination');

        //config
        $config['total_rows'] = $this->people->countAllPeople();
        $config['per_page'] = 8;
        
        //initialize
        $this->pagination->initialize($config);


        $data['start'] = $this->uri->segment(3);
        $data['people'] = $this->people->getPeople($config['per_page'], $data['start']);

        $this->load->view('templates/header',$data);
        $this->load->view('people/index', $data);
        $this->load->view('templates/footer');
    }

    
}