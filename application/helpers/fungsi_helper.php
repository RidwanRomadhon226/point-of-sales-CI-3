<?php

function check_alreadyogin()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('userId');
  if ($user_session) {
    redirect('dasboard');
  }
}


function not_alreadyogin()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('userId');
  if (!$user_session) {
    redirect('auth');
  }
}
