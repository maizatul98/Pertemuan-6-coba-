<?php

class People_model extends CI_Model
{
    public function getAllPeople()
    {
        return $this->db->get('people')->result_array();
    }

    public function getPeople($limit, $start)
    {
        return $this->db->get('people', $limit, $start)->result_array();
    }

    public function countAllPeople()
    {
        return $this->db->get('people')->num_rows();
    }
}