<?php


class Mahasiswa_model extends CI_Model {
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
        
    }


    public function addDataMahasiswa()
    {
        $data = [
            "name" =>$this->input->post('name', true),
            "matricNo" =>$this->input->post('matricNo', true),
            "email" =>$this->input->post('email', true),
            "course" =>$this->input->post('course', true)
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function deleteDataMahasiswa($studentID)
    {
        $this->db->where('studentID', $studentID);
        $this->db->delete('mahasiswa');
    }
}