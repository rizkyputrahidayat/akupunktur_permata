<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        helper_di_controller();
        $this->load->model('Jadwal_model');
        $this->load->model('Akun_model');
        $this->load->model('Menu_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $dataku['judul'] = 'My Profile';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('user/index', $dataku);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $dataku['judul'] = 'Edit Profile';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $dataku);
            $this->load->view('templates/sidebar', $dataku);
            $this->load->view('templates/topbar', $dataku);
            $this->load->view('user/edit', $dataku);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $telp = $this->input->post('telp');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $dataku['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }


                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('name', $name);
            $this->db->set('telp', $telp);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">Profil Berhasil di Update</div>'
            );
            redirect('user');
        }
    }
    public function jadwal()
    {
        $dataku['judul'] = 'Jadwal';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $dataku['jadwal'] = $this->Jadwal_model->list();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('user/jadwal', $dataku);
        $this->load->view('templates/footer');
    }
}
