<?php

function active_menu($dataActive)
{
    $ci = get_instance();
    $cekurl = $ci->uri->segment(1);

    if ($cekurl == $dataActive) {
        return "active";
    }
}

function is_active(){
    $ci = get_instance();

    if(!$ci->session->userdata('username')){
        redirect('Auth');
    }
}