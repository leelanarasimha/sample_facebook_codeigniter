<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 27/04/17
 * Time: 9:16 PM
 */

class Register extends CI_Controller {

    public function index() {
        $this->load->view('header_page');
        $this->load->view('register/register_page');
        $this->load->view('footer_page');
    }

    public function submit() {
        $email_or_phone = $this->input->post('email');
        $password = $this->input->post('password');

        //Before Inserting validation

        $this->load->model('User');
        $this->User->save($email_or_phone, $email_or_phone, $password);
        redirect('login');
    }

}