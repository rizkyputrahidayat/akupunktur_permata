<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Menu_model');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules(
            'email',
            'Email',
            'trim|required|valid_email'
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'trim|required'
        );

        if ($this->form_validation->run() == false) {
            $kundue['kapaloe'] = 'Pintu Masuk Utama';
            $this->load->view('templates/auth_header', $kundue);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login(); //maimbau login, fungsi privat
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where(
            'user',
            [
                'email' => $email
            ]
        )->row_array();
        var_dump($user);

        //kok lai ado user
        if ($user) {
            //kok lai aktif
            if ($user['is_active'] == 1) {
                //cek password nyo dulu
                if (password_verify(
                    $password,
                    $user['password']
                )) {
                    //iko kok lai betul pass nyo
                    $datanyo = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($datanyo);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">Password salah </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">Belum  Aktif</div>'
                );
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">Sudah ada</div>'
            );
            redirect('auth');
        }
    }

    public function register()
    {
        /*
        if ($this->session->userdata('email')){
            redirect('user');
        }
*/
        $this->form_validation->set_rules(
            'namo', //diambiek dari name=""
            'Namo', //buek suko2 ati
            'required|trim' //harus diisi maksud ee
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'is_unique' => 'Email Sudah Terdaftar'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|min_length[3]|matches[password2]',
            [
                'matches' => 'Password Tidak Cocok!!',
                'min_length' => 'Password terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]'
        );
        $this->form_validation->set_rules(
            'telp',
            'telp',
            'required|trim'
        );
        $this->form_validation->set_rules(
            'umur',
            'umur',
            'required|trim'
        );
        $this->form_validation->set_rules(
            'kota_asal',
            'kota_asal',
            'required|trim'
        );


        if ($this->form_validation->run() == false) {
            $cilok['kapaloe'] = 'Akupuntur Permata Registration';
            $cilok['keluhan'] = $this->Menu_model->keluhan();
            $this->load->view('templates/auth_header', $cilok);
            $this->load->view('auth/register', $cilok);
            $this->load->view('templates/auth_footer');
        } else {
            $sonok = [
                'name' => htmlspecialchars($this->input->post('namo', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'telp' => htmlspecialchars($this->input->post('telp', true)),
                'keluhan' => htmlspecialchars($this->input->post('keluhan', true)),
                'umur' => htmlspecialchars($this->input->post('umur', true)),
                'kota_asal' => htmlspecialchars($this->input->post('kota_asal', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('user', $sonok);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert"> Selamat Akun Berhasil Di Buat, Silahkan Login </div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Berkasil keluar </div>'
        );
        redirect('Home');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
