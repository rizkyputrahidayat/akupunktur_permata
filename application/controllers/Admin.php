<?php

use PSpell\Config;

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        helper_di_controller();
        $this->load->model('Jadwal_model');
        $this->load->model('Menu_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
    public function index()
    {
        $dataku['judul'] = 'Dashboard';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('admin/index', $dataku);
        $this->load->view('templates/footer');
    }

    public function role()
    {
        $dataku['judul'] = 'Role';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $dataku['role'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('admin/role', $dataku);
        $this->load->view('templates/footer');
    }


    public function roleAccess($role_id)
    {
        $dataku['judul'] = 'Role Access';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $dataku['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $dataku['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('admin/roleaccess', $dataku);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $dataku = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $dataku);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $dataku);
        } else {
            $this->db->delete('user_access_menu', $dataku);
        }
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Akses dirubah </div>'
        );
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

        // $dataku['jadwal'] = $this->db->get('jadwal')->result_array();
        $dataku['jadwal'] = $this->Jadwal_model->list();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('admin/jadwal', $dataku);
        $this->load->view('templates/footer');
    }
    public function addjadwal()
    {
        $dataku['judul'] = 'Tambah jadwal';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();
        $sonok = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'kategory' => htmlspecialchars($this->input->post('kategory', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_akhir' => htmlspecialchars($this->input->post('jam_akhir', true)),
        ];
        $this->db->insert('jadwal', $sonok);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Jadwal Berhasil Ditambahkan</div>'
        );
        redirect('admin/jadwal');
    }

    public function editjadwal()
    {
        $this->load->model('Jadwal_model');
        $id_jadwal = htmlspecialchars($this->input->post('id_jadwal', true));
        $dataku = [
            'hari' => htmlspecialchars($this->input->post('hari', true)),
            'jenis' => htmlspecialchars($this->input->post('jenis', true)),
            'kategory' => htmlspecialchars($this->input->post('kategory', true)),
            'jam_mulai' => htmlspecialchars($this->input->post('jam_mulai', true)),
            'jam_akhir' => htmlspecialchars($this->input->post('jam_akhir', true)),
        ];
        $this->db->where('id_jadwal', $id_jadwal);
        $this->db->update('jadwal', $dataku);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Data Berhasi Diubah </div>'
        );
        redirect('admin/jadwal');
    }
    public function hapusjadwal()
    {
        $this->load->model('Jadwal_model');
        $id_jadwal = htmlspecialchars($this->input->post('id_jadwal', true));
        $this->db->where('id_jadwal', $id_jadwal)->delete('jadwal');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Data Berhasi Dihapus </div>'
        );
        redirect('admin/jadwal');
    }
    public function akun()
    {
        $dataku['judul'] = 'Daftar Data Pasien';
        $dataku['user'] = $this->db->get_where(
            'user',
            [
                'email' => $this->session->userdata('email')
            ]
        )->row_array();

        $dataku['akun'] = $this->Menu_model->akun();

        $this->load->view('templates/header', $dataku);
        $this->load->view('templates/sidebar', $dataku);
        $this->load->view('templates/topbar', $dataku);
        $this->load->view('admin/akun', $dataku);
        $this->load->view('templates/footer', $dataku);
    }
    public function hapusakun()
    {
        $this->load->model('Menu_model');
        $id = htmlspecialchars($this->input->post('id', true));
        $this->db->where('id', $id)->delete('user');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert"> Data Berhasi Dihapus </div>'
        );
        redirect('admin/akun');
    }
}
