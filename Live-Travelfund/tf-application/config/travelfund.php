<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/* TravelFund System level Cofiguration*/

//All models of travelfund
$config['tf_models'] = array(
    'Admin',
    'User',
    'Right',
    'Partner',
    'Lender',
    'Person',
    'Application',
    'Address'
);
//Model which has user's right based accesse
$config['tf_right_based_models'] = array(
    'User',
    'Partner',
    'Lender',
    'Person',
    'Application',
    'Address'
);
?>