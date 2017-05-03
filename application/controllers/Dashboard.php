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
        $this->load->model('Comment');
        $comments = $this->Comment->get_Comments();
        $this->data['comments'] = $comments;

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

    public function submitpost() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

          if ($this->form_validation->run() == false) {
              $this->session->set_flashdata('errors', validation_errors());
              redirect('dashboard');
          } else {
              $comment = $this->input->post('comment');
              $this->load->model('Comment');
              $this->Comment->saveComment($comment);

              $this->session->set_flashdata('success_message', 'Comment Posted Successfully');
              redirect('dashboard');
          }

     }

     public function likepost($comment_id) {
        $this->load->model('Comment');
        $comment = $this->Comment->get_comment($comment_id);

        if ($comment == false) {
            $this->session->set_flashdata('errors', 'Invalid Comment');
            redirect('dashboard');
        }

        $this->Comment->like_comment($comment_id, ($comment['like_count']+1));
         $this->session->set_flashdata('success_message', 'Post Liked');
         redirect('dashboard');
     }
}