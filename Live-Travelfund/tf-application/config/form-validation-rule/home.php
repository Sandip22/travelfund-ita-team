<?php
$config['home/sendMailContact'] = array(
    array(
        'field' => 'name',
        'label' => 'Please enter a valid Name',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'email',
        'label' => 'Please enter a valid email address',
        'rules' => 'trim|required|valid_email',
    ),
);
