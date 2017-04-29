<?php

/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 28/04/17
 * Time: 9:31 PM
 */
class User extends CI_Model
{

    public function save($email = '', $phone = '', $password = '')
    {
        $insert_data = array(
            'id' => NULL,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
            'created_date' => date('Y-m-d H:i:s')
        );

        $success = $this->db->insert('users', $insert_data);
        return $success;

    }

    public function check_email_exist($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function check_login_details($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function update_password($password)
    {
        $user_details = $this->session->userdata('user_details');
        $this->db->where('id', $user_details['id']);
        return $this->db->update('users', array('password' => $password));

    }
}