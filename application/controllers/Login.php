<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 24/04/17
 * Time: 10:06 PM
 */

Class Login extends CI_Controller {

    public function index() {
        $this->load->view('login/login_page');
    }
}