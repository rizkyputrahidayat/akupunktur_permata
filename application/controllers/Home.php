<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $dataku = array(
            'title' => 'Akupunktur Permata',
            'isi' => 'home/index'

        );
        $this->load->view('home/index', $dataku);
    }
    public function about()
    {
        $dataku = array(
            'title' => 'About us',
            'isi' => 'home/about'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function blog()
    {
        $dataku = array(
            'title' => 'Blog',
            'isi' => 'home/blog'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Nyeri_kepala()
    {
        $dataku = array(
            'title' => 'Nyeri Kepala',
            'isi' => 'home/Nyeri_kepala'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Nyeri_leher()
    {
        $dataku = array(
            'title' => 'Nyeri Leher',
            'isi' => 'home/Nyeri_leher'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Nyeri_bahu()
    {
        $dataku = array(
            'title' => 'Nyeri Bahu',
            'isi' => 'home/Nyeri_bahu'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Nyeri_lutut()
    {
        $dataku = array(
            'title' => 'Nyeri Lutut',
            'isi' => 'home/Nyeri_lutut'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Nyeri_pinggang()
    {
        $dataku = array(
            'title' => 'Nyeri Pinggang',
            'isi' => 'home/Nyeri_pinggang'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Syaraf_kejepit()
    {
        $dataku = array(
            'title' => 'Syaraf Kejepit',
            'isi' => 'home/Syaraf_kejepit'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function Stroke()
    {
        $dataku = array(
            'title' => 'Stroke',
            'isi' => 'home/Stroke'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function jadwal()
    {
        $dataku = array(
            'title' => 'Jadwal Pelayanan',
            'isi' => 'home/jadwal'

        );
        $this->load->model('Jadwal_model');
        $dataku['jadwal'] = $this->Jadwal_model->list();
        $this->load->view('home/layout/v_wrapper', $dataku);
    }

    public function Nyeri_kaki()
    {
        $dataku = array(
            'title' => 'Nyeri Kaki',
            'isi' => 'home/Nyeri_kaki'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function dispepsia()
    {
        $dataku = array(
            'title' => 'Dispepsia',
            'isi' => 'home/dispepsia'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function hipertensi()
    {
        $dataku = array(
            'title' => 'Hipertensi',
            'isi' => 'home/hipertensi'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function promil()
    {
        $dataku = array(
            'title' => 'Program Hamil',
            'isi' => 'home/promil'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function insomnia()
    {
        $dataku = array(
            'title' => 'Insomnia',
            'isi' => 'home/insomnia'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function lbp()
    {
        $dataku = array(
            'title' => 'Low Back Pain',
            'isi' => 'home/lbp'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function asma()
    {
        $dataku = array(
            'title' => 'Asthma Bronchial',
            'isi' => 'home/asma'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function dismenorhea()
    {
        $dataku = array(
            'title' => 'DYSMENORHEA',
            'isi' => 'home/dismenorhea'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function migrain()
    {
        $dataku = array(
            'title' => 'Migraine',
            'isi' => 'home/migrain'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function tension()
    {
        $dataku = array(
            'title' => 'TENSION HEADACHE',
            'isi' => 'home/tension'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function alergi()
    {
        $dataku = array(
            'title' => 'RHINITIS ALERGI',
            'isi' => 'home/alergi'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    public function gallery()
    {
        $dataku = array(
            'title' => 'Gallery',
            'isi' => 'home/gallery'

        );
        $this->load->view('home/layout/v_wrapper', $dataku);
    }
    // public function contact()
    // {
    //     $dataku = array(
    //         'title' => 'Info Kontak',
    //         'isi' => 'home/contact'

    //     );
    //     $this->load->view('home/layout/v_wrapper', $dataku);
    // }
    // public function SendMail()
    // {
    //     if (isset($_POST['submit'])) {
    //         $name = $this->input->post('name');
    //         $email = $this->input->post('email');
    //         $subject = $this->input->post('subject');
    //         $message = $this->input->post('message');

    //         if (!empty($email)) {
    //             //Configurasi to email & proccess
    //             $config = [
    //                 'mailtype' => 'text',
    //                 'charset' => 'iso-8859-1',
    //                 'protocol' => 'smtp',
    //                 'smtp_host' => 'ssl://smtp.googlemail.com',
    //                 'smtp_user' => 'akupunturpermata@gmail.com',
    //                 'smtp_pass' => 'xxx',
    //                 'smtp_port' => 465,
    //             ];

    //             $this->load->library('email', $config);
    //             $this->email->initialize($config);
    //             //End Config

    //             $this->email->form('emailfrom');
    //             $this->email->name($name);
    //             $this->email->to($email);
    //             $this->email->subject($subject);
    //             $this->email->message($message);

    //             if ($this->email->send()) {
    //                 echo "Email Berhasil Di Kirimkan...";
    //             } else {
    //                 show_error($this->email->print_debugger());
    //             }
    //         }
    //     }
    // }
}
