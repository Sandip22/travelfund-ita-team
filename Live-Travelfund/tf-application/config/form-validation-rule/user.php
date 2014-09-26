<?php
$config['users/insert_admin_user'] = array(
    array(
        'field' => 'user_name',
        'label' => 'Username',
        'rules' => 'trim|required|is_unique[admin_user.user_name]'
    ),
    array(
        'field' => 'first_name',
        'label' => 'First Name',
        'rules' => 'trim|required'
    ),
    array(
        'field' => 'last_name',
        'label' => 'Last Name',
        'rules' => 'trim|required'
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'trim|required|valid_email|is_unique[admin_user.email]'
    ),
    array(
        'field' => 'status',
        'label' => 'Status',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|matches[confirm_password]'
    ),
    array(
        'field' => 'confirm_password',
        'label' => 'Confirm Password',
        'rules' => 'required'
    ),
);
$config['users/update_admin_user'] = array(
    array(
        'field' => 'user_name',
        'label' => 'Username',
        'rules' => 'trim|required|edit_is_unique[admin_user.user_name]'
    ),
    array(
        'field' => 'first_name',
        'label' => 'First Name',
        'rules' => 'trim|required'
    ),
    array(
        'field' => 'last_name',
        'label' => 'Last Name',
        'rules' => 'trim|required'
    ),
    array(
        'field' => 'status',
        'label' => 'Status',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'email',
        'label' => 'Email',
        'rules' => 'trim|required|valid_email|edit_is_unique[admin_user.email]'
    ),
);
