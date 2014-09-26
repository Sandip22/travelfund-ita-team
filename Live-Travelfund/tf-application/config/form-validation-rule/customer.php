<?php
$config['credential/send_reset_password_email'] = array(
    array(
        'field' => 'title',
        'label' => 'Please select your title',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'first_name',
        'label' => 'Please enter a valid first name',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'last_name',
        'label' => 'Please enter a valid last name',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'birth_date_dd',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'birth_date_mm',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'birth_date_yyyy',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'email',
        'label' => 'Please enter a valid email address',
        'rules' => 'trim|required|valid_email',
    ),
);
$config['credential/update_password'] = array(
    array(
        'field' => 'password',
        'label' => 'Password',
        'rules' => 'required|matches[confirm_password]',
    ),
    array(
        'field' => 'confirm_password',
        'label' => 'Confirm Password',
        'rules' => 'required',
    ),
);
