<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('Vform_Siswa');
    }
    public function simpan()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama Siswa',
            'required|min_length[1]',
            [
                'required' => 'Nama Siswa Harus diisi',
                'min_lenght' => 'Nama terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'nis',
            'Nomor Induk Siswa',
            'required|min_length[3]',
            [
                'required' => 'NIS Harus diisi',
                'min_lenght' => 'NIS terlalu pendek'
            ]
        );
        if ($this->form_validation->run() != true) {
            $this->load->view('Vform_Siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tanggallahir' => $this->input->post('tanggallahir'),
                'tempatlahir' => $this->input->post('tempatlahir'),
                'alamat' => $this->input->post('alamat'),
                'jeniskelamin' => $this->input->post('jeniskelamin'),
                'agama' => $this->input->post('agama')
            ];
            $this->load->view('Vdata_Siswa', $data);
        }
    }
}
