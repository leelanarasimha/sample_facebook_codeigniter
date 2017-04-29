<?php

/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 27/04/17
 * Time: 9:16 PM
 */
class Register extends CI_Controller
{

    public function index()
    {
        $this->load->view('header_page');
        $this->load->view('register/register_page');
        $this->load->view('footer_page');
    }

    public function submit()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email Address', 'required|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password_confirm', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_message('is_unique', 'Email Address already exist in database');
        $this->form_validation->set_message('required', '{field} should not be empty');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect('register');
        } else {
            $this->load->helper('email');
            $email_or_phone = $this->input->post('email');
            if (valid_email($email_or_phone)) {
                $email = $email_or_phone;
                $phone = '';
            } elseif (is_numeric($email_or_phone)) {
                $phone = $email_or_phone;
                $email = '';
            } else {
                $this->session->set_flashdata('errors', 'Please enter correct email or phone');
                redirect('register');
            }

            $password = $this->input->post('password');
            $this->load->model('User');
            $this->User->save($email, $phone, $password);
            $this->session->set_flashdata('success_message', 'Registered successfully');
            redirect('login');
        }

    }

}