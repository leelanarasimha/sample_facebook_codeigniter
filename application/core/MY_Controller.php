<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 29/04/17
 * Time: 6:57 PM
 */

class MY_Controller extends CI_Controller {
    public $data = array();
    public function __construct()
    {
        parent::__construct();

        $login_details = $this->session->userdata('user_details');
        if ( $login_details) {
            $this->data['logged_email'] = $login_details['email'];
            $this->logged_in_id = $login_details['id'];
        }
    }
}