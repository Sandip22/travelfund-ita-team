<?php
$config['application/insert_personal_details'] = array(
    array(
        'field' => 'title',
        'label' => 'Please select your title',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'first_name',
        'label' => 'Please enter a valid first name',
        'rules' => 'trim|required|max_length[50]|valid_name',
    ),
    array(
        'field' => 'last_name',
        'label' => 'Please enter a valid last name',
        'rules' => 'trim|required|max_length[50]|valid_name',
    ),
    array(
        'field' => 'birth_date_dd',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required|numeric',
    ),
    array(
        'field' => 'birth_date_mm',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required|numeric',
    ),
    array(
        'field' => 'birth_date_yyyy',
        'label' => 'Please select your date of birth',
        'rules' => 'trim|required|numeric|validate_date',
    ),
    array(
        'field' => 'email',
        'label' => 'Please enter a valid email address',
        //'rules' => 'trim|required|valid_email|matches[confirm_email]|is_unique[customer.email]',
        'rules' => 'trim|required|valid_email|max_length[50]',
    ),
    array(
        'field' => 'confirm_email',
        'label' => 'Please confirm your email address',
        'rules' => 'trim|required|valid_email|caseinses_matches',
    ),
    array(
        'field' => 'password',
        'label' => 'Please enter your password',
        'rules' => 'required|matches[confirm_password]|valid_password',
    ),
    array(
        'field' => 'confirm_password',
        'label' => 'Please confirm your password',
        'rules' => 'required',
    ),
    
    array(
        'field' => 'mobile_phone',
        'label' => 'Please enter a valid mobile number.  Your mobile number must be 11 digits long.',
        'rules' => 'trim|required|max_length[13]|numeric',
    ),
    array(
        'field' => 'departure_date',
        'label' => 'Please select your approximate departure date',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'sp_terms', 
        'label' => 'Please tick the box if you have read and accepted the security and privacy statement',
        'rules' => 'trim|required',
    ),
    
);
$config['application/insert_address_details'] = array(
    array(
        'field' => 'post_code',
        'label' => 'Please enter your full UK postcode',
        'rules' => 'trim|required|valid_post_code|max_length[10]',
    ),
    array(
        'field' => 'house_number',
        'label' => 'Please enter a valid house number',
        'rules' => 'trim|required|valid_alphanumeric_with_space|max_length[50]',
    ),
    array(
        'field' => 'street',
        'label' => 'Please enter a valid street',
        'rules' => 'trim|required|max_length[50]',
    ),
    array(
        'field' => 'city',
        'label' => 'Please enter a valid town',
        'rules' => 'trim|required|max_length[50]',
    ),
    array(
        'field' => 'county',
        'label' => 'County',
        'rules' => 'trim',
    ),
    array(
        'field' => 'howmany_add',
        'label' => 'Please make a selection',
        'rules' => 'trim|required|numeric',
    ),
);
$config['application/insert_employement_details'] = array(
    array(
        'field' => 'emp_status',
        'label' => 'Please select your employment status',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'anum_hs_income_b_tax',
        'label' => 'Please enter your yearly household income before tax using numbers only',
        'rules' => 'trim|required|valid_number',
    ),
    array(
        'field' => 'emp_type',
        'label' => 'Please make select your employment type',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'res_status',
        'label' => 'Please select your residential status',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'salary_day',
        'label' => 'Please make a selection',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'uk_curr_acc',
        'label' => 'Please make a selection',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'uk_saving_acc',
        'label' => 'Please make a selection',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'mobile_verif_code',
        'label' => 'Invalid code',
        'rules' => 'trim|required|numeric',
    ),
    
);
$config['application/authenticate'] = array(
    array(
        'field' => 'email',
        'label' => 'Please enter a valid email address',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'password',
        'label' => 'Please enter your password',
        'rules' => 'trim|required',
    ),
);
$config['application/agreement_inprocess'] = array(
   array(
        'field' => 'accept_terms',
        'label' => 'Please tick the box if you accept the credit agreement',
        'rules' => 'trim|required',
    ),
);
$config['application/customer_eligibility_response'] = array(
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
        'field' => 'house_number',
        'label' => 'Please enter a valid house number',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'post_code',
        'label' => 'Please enter your full UK postcode',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'time_at_add',
        'label' => 'Please enter time At Address',
        'rules' => 'trim|required|numeric',
    ),
    array(
        'field' => 'email',
        'label' => 'Please enter a valid email address',
        'rules' => 'trim|required|valid_email',
    ),
    array(
        'field' => 'emp_status',
        'label' => 'Please select your employment status',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'anum_income',
        'label' => 'Please enter your yearly income',
        'rules' => 'trim|required|numeric',
    ),
    array(
        'field' => 'anum_hs_income_b_tax',
        'label' => 'Please enter your yearly household income before tax using numbers only',
        'rules' => 'trim|required|numeric',
    ),
    array(
        'field' => 'departure_date',
        'label' => 'Please select your approximate departure date',
        'rules' => 'trim|required',
    ),
    array(
        'field' => 'accept_terms',
        'label' => 'Please tick the box if you accept the terms and conditions',
        'rules' => 'trim|required',
    ),
    
    
);



