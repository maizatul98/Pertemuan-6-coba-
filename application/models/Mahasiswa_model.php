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

    public function getMahasiswaById($studentID)
    {
        return $this->db->get_where('mahasiswa', ['studentID' => $studentID])->row_array();

    }

    public function editDataMahasiswa()
    {
        $data = [
            "name" =>$this->input->post('name', true),
            "matricNo" =>$this->input->post('matricNo', true),
            "email" =>$this->input->post('email', true),
            "course" =>$this->input->post('course', true)
        ];

        $this->db->where('studentID', $this->input->post('studentID'));
        $this->db->update('mahasiswa', $data);
    }
}