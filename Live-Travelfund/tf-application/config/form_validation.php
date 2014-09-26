<?php

/**
 * This file includes all files having validation.
 * File should be controller wise.It will help to manage rules.
 */
 
//Application controller forms and validation rules.
include_once 'form-validation-rule/application.php';
//Customer admin level forma and validation rules.
include_once 'form-validation-rule/customer.php';
//Admin controller forms and validation rules.
include_once 'form-validation-rule/login.php';
include_once 'form-validation-rule/user.php';

//Customer-Myaccount Controller form & validation rules
include_once 'form-validation-rule/myaccount.php';

//new design Controller - Home & validation rules
include_once 'form-validation-rule/home.php';

