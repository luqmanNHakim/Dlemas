<?php

class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-datasiswa');
    }
    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'NIS' => $this->input->post('NIS'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tmpt_lahir' => $this->input->post('tmpt_lahir'),
            'alamat' => $this->input->post('alamat'),
            'kelamin' => $this->input->post('kelamin'),
            'agama' => $this->input->post('agama')

        ];

        $this->load->view('view-data-siswa', $data);
    }
}