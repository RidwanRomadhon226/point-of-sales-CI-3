<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  public function index()
  {
    // $this->load->view('dashboard');
    not_alreadyogin();
    $this->load->model('user_m');
    $data['row'] = $this->user_m->get();
    $this->template->load('template', 'user/user_view', $data);
  }

  public function add()
  {
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
    $this->form_validation->set_rules('name', 'name', 'trim|required|min_length[3]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[3]');
    $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
    $this->form_validation->set_rules('alamat', 'alamat', 'required');
    $this->form_validation->set_rules('level', 'level', 'required');


    if ($this->form_validation->run() == FALSE) {
      $this->template->load('template', 'user/user_add');
    } else {
      echo 'oke';
    }
  }
}
