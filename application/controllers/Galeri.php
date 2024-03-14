<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
    }

    public function foto()
    {
        $kategori = $this->kategori_m;
        $data['kategori'] = $kategori->getAll();
        $data['title'] = "Foto";
        $data['popular'] = $artikel->kabarTerkini();

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('galeri/foto');
        $this->load->view('themes/sidebar', $data);
        $this->load->view('themes/footer');
    }

    public function video()
    {
        $kategori = $this->kategori_m;
        $data['kategori'] = $kategori->getAll();
        $data['title'] = "Video";
        $data['popular'] = $artikel->kabarTerkini();

        $this->load->view('themes/header', $data);
        $this->load->view('themes/top-menu', $data);
        $this->load->view('themes/breadcrumb');
        $this->load->view('galeri/video');
        $this->load->view('themes/sidebar', $data);
        $this->load->view('themes/footer');
    }
}
