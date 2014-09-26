<?php
$config['myaccount/updatepassword'] = array(
    array(
        'field' => 'password',
        'label' => 'Please enter your password',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'newpassword',
        'label' => 'Please enter new password',
        'rules' => 'trim|required|matches[retype_newpassword]',
    ),
    array(
        'field' => 'retype_newpassword',
        'label' => 'Please confirm new password',
        'rules' => 'trim|required',
    ),
);
$config['myaccount/authenticate'] = array(
    array(
        'field' => 'email',
        'label' => 'Please enter your email',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'password',
        'label' => 'Please enter your password',
        'rules' => 'trim|required',
    ),
);

