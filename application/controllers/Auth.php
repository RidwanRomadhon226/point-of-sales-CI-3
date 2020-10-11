<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function index()
  {
    check_alreadyogin();
    $this->load->view('auth/login');
  }

  public function proses()
  {
    // echo 'proses';
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
      $this->load->model('User_m');
      $query = $this->User_m->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array(
          'userId' => $row->user_id,
          'level' => $row->level,
        );
        $this->session->set_userdata($params);
        echo "<script>
        alert('selamat Berhasil login'); window.location='" . site_url('dashboard') . "';
        </script>";
      } else {
        echo "<script>
        alert('username atau Password Salah'); window.location='" . site_url('auth') . "';
        </script>";
      }
    }
  }

  public function signout()
  {
    $params = array('userId', 'level');
    $this->session->unset_userdata($params);
    redirect('auth');
  }
}
