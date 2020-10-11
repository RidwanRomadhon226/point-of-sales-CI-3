<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function index()
  {
    // $this->load->view('dashboard');
    not_alreadyogin();
    $this->template->load('template', 'dashboard');
  }
}
