<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 29/04/17
 * Time: 6:26 PM
 */

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $login_details = $this->session->userdata('user_details');
        if ( ! $login_details) {
            $this->session->set_flashdata('errors', 'Please login to access this page');
            redirect('login');
        }
    }

    public function index() {

        $this->load->view('header_page');
        $this->load->view('dashboard/dashboard_page');
        $this->load->view('footer_page');
    }
}