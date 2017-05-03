<?php
/**
 * Created by PhpStorm.
 * User: leelanarasimha
 * Date: 03/05/17
 * Time: 9:33 PM
 */

class Comment extends CI_Model {

    public function saveComment($comment) {

        $login_details = $this->session->userdata('user_details');
        $insert_data = array(
            'id' => NULL,
            'comment' => $comment,
            'user_id' => $login_details['id'],
            'created_date' => date('Y-m-d H:i:s')
        );

        $this->db->insert('comments', $insert_data);
    }

    public function get_Comments() {

        $this->db->select('comments.*, users.email');
        $this->db->join('users', 'users.id = comments.user_id');
        $query = $this->db->get('comments');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    public function get_comment($comment_id) {

        $this->db->where('id', $comment_id);
        $query = $this->db->get('comments');

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function like_comment($comment_id, $like_count) {
        $this->db->where('id', $comment_id);
        $this->db->update('comments', array('like_count' => $like_count));
    }
}