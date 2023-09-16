<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('ui/admin/header', $data);
        $this->load->view('ui/admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('ui/admin/footer', $data);
    }
}
