<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 24/04/17
 * Time: 10:06 PM
 */

Class Login extends CI_Controller {

    public function index() {
        $this->load->view('header_page');
        $this->load->view('login/login_page');
        $this->load->view('footer_page');
    }

    public function submit() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->load->model('User');
            $user_details = $this->User->check_email_exist($email);
            if (! $user_details) {
                $this->session->set_flashdata('errors', 'Email Doesnt exist');
                redirect('login');
            }
            $user_details = $this->User->check_login_details($email, $password);
            if (! $user_details) {
                $this->session->set_flashdata('errors', 'Invalid Login details');
                redirect('login');
            }

            $this->session->set_flashdata('success_message', 'Welcome User');
            redirect('dashboard');
        }

    }
}