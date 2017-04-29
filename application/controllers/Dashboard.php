<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 29/04/17
 * Time: 6:26 PM
 */

class Dashboard extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $name = 'leela narasimha';
        $this->data['name'] = $name;
        $this->data['age'] = 30;

        $this->load->view('header_page', $this->data);
        $this->load->view('dashboard/dashboard_page', $this->data);
        $this->load->view('footer_page', $this->data);
    }

    public function changepassword() {
        $new_password = $this->input->post('new_password');
        $confirm_password = $this->input->post('confirm_new_password');
        $this->load->model('User');
        $this->User->update_password($new_password);
        $this->session->set_flashdata('success_message', 'Password changed successfully');
        redirect('dashboard');
    }
}