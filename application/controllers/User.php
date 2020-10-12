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
    $this->template->load('template', 'user/user_add');
  }
}
