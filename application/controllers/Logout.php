<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 29/04/17
 * Time: 6:43 PM
 */

class logout extends CI_Controller {
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
        $this->session->sess_destroy();
        redirect('login');
    }
}