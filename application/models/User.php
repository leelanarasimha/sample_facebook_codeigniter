<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 28/04/17
 * Time: 9:31 PM
 */

class User extends CI_Model {

    public function save($email = '', $phone = '', $password = '') {
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
}