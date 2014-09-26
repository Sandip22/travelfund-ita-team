<?php
$config['login/authenticate'] = array(
    array(
        'field' => 'user_name',
        'label' => 'User Name',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'trim|required',
    ),
);   