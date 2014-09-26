<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2014-09-03 00:00:17 --> introduction :: 88d53fcdb53d748dc5bf7f23ba6131f2 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CMjl06jRw8ACFYMewwodT04AuA
ERROR - 2014-09-03 00:00:17 --> introduction :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 00:00:17 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 00:00:17 --> introduction :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: Partner URL https://www.travelfund.co.uk/?gclid=CMjl06jRw8ACFYMewwodT04AuA
ERROR - 2014-09-03 00:00:51 --> how_it_works :: 88d53fcdb53d748dc5bf7f23ba6131f2
ERROR - 2014-09-03 00:00:56 -->  OTA URL :: https://www.travelfund.co.uk/?gclid=CMjl06jRw8ACFYMewwodT04AuA
ERROR - 2014-09-03 00:00:56 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 00:00:58 --> CURL :: options :: No option
ERROR - 2014-09-03 00:00:58 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 00:00:58 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 00:00:58 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 00:00:58 --> personal_details :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 00:04:00 --> get_application
ERROR - 2014-09-03 00:04:00 --> get_application LAST APP stdClass Object
(
)

ERROR - 2014-09-03 00:04:00 --> insert_personal_details :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: oLastApp stdClass Object
(
    [can_apply] => 1
    [app_incompelete] => 
)

ERROR - 2014-09-03 00:04:00 --> insert_personal_details :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: New Customer Array
(
    [title] => Mr
    [first_name] => Conor
    [last_name] => reilly
    [birth_date] => 21-7-1993
    [email] => nike_football_42@msn.com
    [password] => 0a33e03fc24746aec7e688401be43ecc
)

ERROR - 2014-09-03 00:04:00 --> insert_personal_details :: 88d53fcdb53d748dc5bf7f23ba6131f2 :: New Application Array
(
    [mobile_phone] => 07746323324
    [departure_date] => 24-07-2015
    [sp_terms] => yes
    [cust_id] => 243
    [partner_id] => 2
    [lender_id] => 1
    [created_datetime] => 2014-09-03 00:04:00
    [modified_datetime] => 2014-09-03 00:04:00
)

ERROR - 2014-09-03 00:05:06 --> get_address_details :: 88d53fcdb53d748dc5bf7f23ba6131f2
ERROR - 2014-09-03 00:05:23 --> insert_address_details :: 33243cdd5d0c31b48356314165df2bfc
ERROR - 2014-09-03 00:05:23 --> false
ERROR - 2014-09-03 00:05:23 --> insert_address_details :: 33243cdd5d0c31b48356314165df2bfc :: Insert Address Array
(
    [house_number] => 42
    [street] => Dawlish Road
    [post_code] => ls99ds
    [city] => Leeds
    [county] => West Yorkshire
    [howmany_add] => 2
    [app_id] => 264
    [created_datetime] => 2014-09-03 00:05:23
    [modified_datetime] => 2014-09-03 00:05:23
)

ERROR - 2014-09-03 00:05:23 -->  OTA URL :: https://www.travelfund.co.uk/?gclid=CMjl06jRw8ACFYMewwodT04AuA
ERROR - 2014-09-03 00:05:23 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 00:05:26 --> CURL :: options :: title=Mr&lastName=reilly&firstName=Conor&dateOfBirth=1993-07-21&email=nike_football_42%40msn.com&mobilePhone=07746323324&agreeTerms=true&productSpecificDetails=departureDate%5E2015-07-24&addresses%5B0%5D.houseNumber=42&addresses%5B0%5D.streetName=Dawlish+Road&addresses%5B0%5D.townCity=Leeds&addresses%5B0%5D.postcode=ls99ds&promoCode=TVR001
ERROR - 2014-09-03 00:05:26 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Apply/TVR001
ERROR - 2014-09-03 00:05:26 -->  ROW ResponseArray
(
    [applicationId] => 1001567517
    [statusCode] => VCREQ
    [statusDescription] => Mobile verification code requested.
    [productOffer] => 
)

ERROR - 2014-09-03 00:05:26 --> Decoded ResponseArray
(
    [applicationId] => 1001567517
    [statusCode] => VCREQ
    [statusDescription] => Mobile verification code requested.
    [productOffer] => 
)

ERROR - 2014-09-03 00:05:26 --> insert_address_details :: 33243cdd5d0c31b48356314165df2bfc :: APS Response Array
(
    [len_app_id] => 1001567517
    [app_status] => VCREQ
)

ERROR - 2014-09-03 00:05:26 --> insert_address_details :: 33243cdd5d0c31b48356314165df2bfc :: Update Application Array
(
    [col_val] => Array
        (
            [len_app_id] => 1001567517
            [app_status] => VCREQ
        )

    [where] => Array
        (
            [id] => 264
        )

)

ERROR - 2014-09-03 00:07:15 --> insert_employement_details :: 33243cdd5d0c31b48356314165df2bfc
ERROR - 2014-09-03 00:07:15 --> insert_employement_details :: 33243cdd5d0c31b48356314165df2bfc :: Insert Employement Array
(
    [emp_status] => Full Time Employed
    [emp_type] => Management
    [res_status] => Living With Parents
    [anum_hs_income_b_tax] => 29000
    [salary_day] => End of the month
    [uk_curr_acc] => Yes
    [uk_saving_acc] => No
    [app_id] => 264
    [created_datetime] => 2014-09-03 00:07:15
    [modified_datetime] => 2014-09-03 00:07:15
)

ERROR - 2014-09-03 00:07:15 -->  OTA URL :: https://www.travelfund.co.uk/?gclid=CMjl06jRw8ACFYMewwodT04AuA
ERROR - 2014-09-03 00:07:15 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 00:07:16 --> CURL :: options :: applicationId=1001567517&employmentStatus=Full+Time+Employed&residentialStatus=Living+With+Parents&householdIncome=29000&verificationCode=9670&productSpecificDetails=employmentType%5EManagement%7CpaymentFrequency%5EEnd+of+the+month&promoCode=TVR001
ERROR - 2014-09-03 00:07:16 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Apply/TVR001
ERROR - 2014-09-03 00:07:16 -->  ROW ResponseArray
(
    [applicationId] => 1001567517
    [statusCode] => ACREQ
    [statusDescription] => Debit card requires authentication.
    [productOffer] => Array
        (
            [promocode] => TVR001
            [creditLimit] => 0
            [PurchaseAPR] => 39.9
            [cashAPR] => 39.9
            [specialAPR] => 39.9
            [secciUrl] => Terms/SECCI/1001567517
            [creditAgreementUrl] => Terms/CreditAgreement/1001567517
            [creditTermMonths] => 12
            [creditTermDays] => 0
            [totalAmountToPay] => 1194.06
            [simpleRate] => 19.41
            [accountNumber] => 
            [depositRequired] => 
        )

)

ERROR - 2014-09-03 00:07:16 --> Decoded ResponseArray
(
    [applicationId] => 1001567517
    [statusCode] => ACREQ
    [statusDescription] => Debit card requires authentication.
    [productOffer] => Array
        (
            [promocode] => TVR001
            [creditLimit] => 0
            [PurchaseAPR] => 39.9
            [cashAPR] => 39.9
            [specialAPR] => 39.9
            [secciUrl] => Terms/SECCI/1001567517
            [creditAgreementUrl] => Terms/CreditAgreement/1001567517
            [creditTermMonths] => 12
            [creditTermDays] => 0
            [totalAmountToPay] => 1194.06
            [simpleRate] => 19.41
            [accountNumber] => 
            [depositRequired] => 
        )

)

ERROR - 2014-09-03 00:07:16 --> insert_employement_details :: 33243cdd5d0c31b48356314165df2bfc :: APS Response Array
(
    [len_app_id] => 1001567517
    [app_status] => ACREQ
    [product_offer] => Array
        (
            [promocode] => TVR001
            [creditLimit] => 0
            [PurchaseAPR] => 39.9
            [cashAPR] => 39.9
            [specialAPR] => 39.9
            [secciUrl] => Terms/SECCI/1001567517
            [creditAgreementUrl] => Terms/CreditAgreement/1001567517
            [creditTermMonths] => 12
            [creditTermDays] => 0
            [totalAmountToPay] => 1194.06
            [simpleRate] => 19.41
            [accountNumber] => 
            [depositRequired] => 
        )

)

ERROR - 2014-09-03 00:07:16 --> insert_employement_details :: 33243cdd5d0c31b48356314165df2bfc :: Application Update Array
(
    [col_val] => Array
        (
            [len_app_id] => 1001567517
            [app_status] => ACREQ
        )

    [where] => Array
        (
            [id] => 264
        )

)

ERROR - 2014-09-03 00:07:37 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 00:10:21 --> introduction :: 715c89c4ee0ed5d9c6ad9ed1ec504711 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 00:10:21 --> introduction :: 715c89c4ee0ed5d9c6ad9ed1ec504711 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 00:10:21 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 00:10:21 --> introduction :: 715c89c4ee0ed5d9c6ad9ed1ec504711 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 00:10:27 --> how_it_works :: 715c89c4ee0ed5d9c6ad9ed1ec504711
ERROR - 2014-09-03 00:10:44 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 00:10:47 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 00:23:41 --> introduction :: df1d21c69023bfc5c9b62e51e12da788 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 00:23:41 --> introduction :: df1d21c69023bfc5c9b62e51e12da788 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 00:23:41 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:23:41 --> introduction :: df1d21c69023bfc5c9b62e51e12da788 :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 00:24:52 --> how_it_works :: df1d21c69023bfc5c9b62e51e12da788
ERROR - 2014-09-03 00:32:16 --> login :: e8b59284cbad23d6a90c39d84a0a7a8a :: e8b59284cbad23d6a90c39d84a0a7a8a
ERROR - 2014-09-03 00:32:16 --> login :: e8b59284cbad23d6a90c39d84a0a7a8a :: e8b59284cbad23d6a90c39d84a0a7a8a :: Checkout widget
ERROR - 2014-09-03 00:32:16 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:36:21 --> login :: 28a3f8e9d02506be7b900359a82aa7f8 :: 28a3f8e9d02506be7b900359a82aa7f8
ERROR - 2014-09-03 00:36:21 --> login :: 28a3f8e9d02506be7b900359a82aa7f8 :: 28a3f8e9d02506be7b900359a82aa7f8 :: Checkout widget
ERROR - 2014-09-03 00:36:21 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:44:19 --> login :: 5cac6a27bce99dc802ff97bea4965d35 :: 5cac6a27bce99dc802ff97bea4965d35
ERROR - 2014-09-03 00:44:19 --> login :: 5cac6a27bce99dc802ff97bea4965d35 :: 5cac6a27bce99dc802ff97bea4965d35 :: Checkout widget
ERROR - 2014-09-03 00:44:19 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:50:56 --> login :: 5b6eeaeb8523233ea9af339be5ad0d96 :: 5b6eeaeb8523233ea9af339be5ad0d96
ERROR - 2014-09-03 00:50:56 --> login :: 5b6eeaeb8523233ea9af339be5ad0d96 :: 5b6eeaeb8523233ea9af339be5ad0d96 :: Checkout widget
ERROR - 2014-09-03 00:50:56 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:51:43 --> login :: fb4426c5a820643fc8b2adde3068a101 :: fb4426c5a820643fc8b2adde3068a101
ERROR - 2014-09-03 00:51:43 --> login :: fb4426c5a820643fc8b2adde3068a101 :: fb4426c5a820643fc8b2adde3068a101 :: Checkout widget
ERROR - 2014-09-03 00:51:43 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:52:38 --> login :: 564be1184624ebd5d868d39238158722 :: 564be1184624ebd5d868d39238158722
ERROR - 2014-09-03 00:52:38 --> login :: 564be1184624ebd5d868d39238158722 :: 564be1184624ebd5d868d39238158722 :: Checkout widget
ERROR - 2014-09-03 00:52:38 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 00:59:13 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 01:14:11 --> login :: 251632ad3e91b9432373740e0635912e :: 251632ad3e91b9432373740e0635912e
ERROR - 2014-09-03 01:14:11 --> login :: 251632ad3e91b9432373740e0635912e :: 251632ad3e91b9432373740e0635912e :: Checkout widget
ERROR - 2014-09-03 01:14:11 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 01:35:54 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 01:35:55 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 02:26:05 --> login :: f76fad02512dd7cba28da62fa81b8b99 :: f76fad02512dd7cba28da62fa81b8b99
ERROR - 2014-09-03 02:26:05 --> login :: f76fad02512dd7cba28da62fa81b8b99 :: f76fad02512dd7cba28da62fa81b8b99 :: Checkout widget
ERROR - 2014-09-03 02:26:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 02:49:25 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 03:43:27 --> login :: c882909a218f4697ef753326602617d3 :: c882909a218f4697ef753326602617d3
ERROR - 2014-09-03 03:43:27 --> login :: c882909a218f4697ef753326602617d3 :: c882909a218f4697ef753326602617d3 :: Checkout widget
ERROR - 2014-09-03 03:43:28 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 03:58:30 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 04:03:41 --> login :: 5989119327af744425beda470782336b :: 5989119327af744425beda470782336b
ERROR - 2014-09-03 04:03:41 --> login :: 5989119327af744425beda470782336b :: 5989119327af744425beda470782336b :: Checkout widget
ERROR - 2014-09-03 04:03:41 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 04:20:04 --> login :: bebb2fc8c9cf2e17067cdab63daa6598 :: bebb2fc8c9cf2e17067cdab63daa6598
ERROR - 2014-09-03 04:20:04 --> login :: bebb2fc8c9cf2e17067cdab63daa6598 :: bebb2fc8c9cf2e17067cdab63daa6598 :: Checkout widget
ERROR - 2014-09-03 04:20:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 04:46:27 --> login :: 103bb3ec335c60ded97feea499344c41 :: 103bb3ec335c60ded97feea499344c41
ERROR - 2014-09-03 04:46:27 --> login :: 103bb3ec335c60ded97feea499344c41 :: 103bb3ec335c60ded97feea499344c41 :: Checkout widget
ERROR - 2014-09-03 04:46:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 04:52:23 --> login :: d908dc8df54eb89c55d4e0f7b2592e41 :: d908dc8df54eb89c55d4e0f7b2592e41
ERROR - 2014-09-03 04:52:23 --> login :: d908dc8df54eb89c55d4e0f7b2592e41 :: d908dc8df54eb89c55d4e0f7b2592e41 :: Checkout widget
ERROR - 2014-09-03 04:52:23 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 05:19:27 --> login :: 3c3f7aea6a74be8e8ecd455778f1cea6 :: 3c3f7aea6a74be8e8ecd455778f1cea6
ERROR - 2014-09-03 05:19:27 --> login :: 3c3f7aea6a74be8e8ecd455778f1cea6 :: 3c3f7aea6a74be8e8ecd455778f1cea6 :: Checkout widget
ERROR - 2014-09-03 05:19:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 05:23:40 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 05:50:13 --> login :: 1b959ab057824bd5e1b785f479b28fc1 :: 1b959ab057824bd5e1b785f479b28fc1
ERROR - 2014-09-03 05:50:13 --> login :: 1b959ab057824bd5e1b785f479b28fc1 :: 1b959ab057824bd5e1b785f479b28fc1 :: Checkout widget
ERROR - 2014-09-03 05:50:13 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 05:56:12 --> login :: f492523bec621c4cbf29dfad5786302d :: f492523bec621c4cbf29dfad5786302d
ERROR - 2014-09-03 05:56:12 --> login :: f492523bec621c4cbf29dfad5786302d :: f492523bec621c4cbf29dfad5786302d :: Checkout widget
ERROR - 2014-09-03 05:56:12 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 05:56:55 --> login :: 2acb22c987e17dbf8468aadf6a5e110b :: 2acb22c987e17dbf8468aadf6a5e110b
ERROR - 2014-09-03 05:56:55 --> login :: 2acb22c987e17dbf8468aadf6a5e110b :: 2acb22c987e17dbf8468aadf6a5e110b :: Checkout widget
ERROR - 2014-09-03 05:56:55 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 06:02:07 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 06:02:41 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 06:02:45 --> Severity: Notice  --> Undefined variable: data /var/www/html/travelfund/tf-application/views/partnersContact.php 15
ERROR - 2014-09-03 06:34:18 --> login :: 90a95ed72320267a862beb740c7810a8 :: 90a95ed72320267a862beb740c7810a8
ERROR - 2014-09-03 06:34:18 --> login :: 90a95ed72320267a862beb740c7810a8 :: 90a95ed72320267a862beb740c7810a8 :: Checkout widget
ERROR - 2014-09-03 06:34:18 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 06:34:33 --> login :: 86dd6bc52828d34c79ee36b373e545ee :: 86dd6bc52828d34c79ee36b373e545ee
ERROR - 2014-09-03 06:34:33 --> login :: 86dd6bc52828d34c79ee36b373e545ee :: 86dd6bc52828d34c79ee36b373e545ee :: Checkout widget
ERROR - 2014-09-03 06:34:33 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 06:34:56 --> login :: 3e8866c73431f82c06982367ecb0dba6 :: 3e8866c73431f82c06982367ecb0dba6
ERROR - 2014-09-03 06:34:56 --> login :: 3e8866c73431f82c06982367ecb0dba6 :: 3e8866c73431f82c06982367ecb0dba6 :: Checkout widget
ERROR - 2014-09-03 06:34:56 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 07:06:18 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 07:40:44 --> login :: 03dc36b5491660b3f79d4b29acd3ef17 :: 03dc36b5491660b3f79d4b29acd3ef17
ERROR - 2014-09-03 07:40:44 --> login :: 03dc36b5491660b3f79d4b29acd3ef17 :: 03dc36b5491660b3f79d4b29acd3ef17 :: Checkout widget
ERROR - 2014-09-03 07:40:44 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 07:49:59 --> introduction :: 7c00f185319bcd2cad265b0b5802d187 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 07:49:59 --> introduction :: 7c00f185319bcd2cad265b0b5802d187 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 07:49:59 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 07:49:59 --> introduction :: 7c00f185319bcd2cad265b0b5802d187 :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 07:52:35 --> login :: 6c1624099c951080e18484659a3928f7 :: 6c1624099c951080e18484659a3928f7
ERROR - 2014-09-03 07:52:35 --> login :: 6c1624099c951080e18484659a3928f7 :: 6c1624099c951080e18484659a3928f7 :: Checkout widget
ERROR - 2014-09-03 07:52:35 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:09:57 --> login :: 2682d5c77b789fc6dac151d681c44b10 :: 2682d5c77b789fc6dac151d681c44b10
ERROR - 2014-09-03 08:09:57 --> login :: 2682d5c77b789fc6dac151d681c44b10 :: 2682d5c77b789fc6dac151d681c44b10 :: Checkout widget
ERROR - 2014-09-03 08:09:57 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:14:38 --> Severity: Notice  --> Undefined variable: data /var/www/html/travelfund/tf-application/views/partnersContact.php 15
ERROR - 2014-09-03 08:17:34 --> login :: f85c2db1a8ce6ceb03b6545daf96b600 :: f85c2db1a8ce6ceb03b6545daf96b600
ERROR - 2014-09-03 08:17:34 --> login :: f85c2db1a8ce6ceb03b6545daf96b600 :: f85c2db1a8ce6ceb03b6545daf96b600 :: Checkout widget
ERROR - 2014-09-03 08:17:34 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:24:49 --> login :: 3ffec522c731d77376983e0d247ad566 :: 3ffec522c731d77376983e0d247ad566
ERROR - 2014-09-03 08:24:49 --> login :: 3ffec522c731d77376983e0d247ad566 :: 3ffec522c731d77376983e0d247ad566 :: Checkout widget
ERROR - 2014-09-03 08:24:49 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:25:41 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 08:35:10 --> introduction :: 3278c1c07f6d68618f727e3a8441a9f6 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 08:35:10 --> introduction :: 3278c1c07f6d68618f727e3a8441a9f6 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 08:35:10 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:35:10 --> introduction :: 3278c1c07f6d68618f727e3a8441a9f6 :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 08:45:04 --> login :: 574de353254d2cb6692f7d5c2b562727 :: 574de353254d2cb6692f7d5c2b562727
ERROR - 2014-09-03 08:45:04 --> login :: 574de353254d2cb6692f7d5c2b562727 :: 574de353254d2cb6692f7d5c2b562727 :: Checkout widget
ERROR - 2014-09-03 08:45:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:52:03 --> login :: 67ea458ce3fcee966a60dd5462dedf8d :: 67ea458ce3fcee966a60dd5462dedf8d
ERROR - 2014-09-03 08:52:03 --> login :: 67ea458ce3fcee966a60dd5462dedf8d :: 67ea458ce3fcee966a60dd5462dedf8d :: Checkout widget
ERROR - 2014-09-03 08:52:03 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 08:56:24 --> login :: 5338d8a074666867b40de52d892cfe8b :: 5338d8a074666867b40de52d892cfe8b
ERROR - 2014-09-03 08:56:24 --> login :: 5338d8a074666867b40de52d892cfe8b :: 5338d8a074666867b40de52d892cfe8b :: Checkout widget
ERROR - 2014-09-03 08:56:24 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:04:46 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:07:14 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:10:25 --> login :: 775adf7dd731aca498d7257483370968 :: 775adf7dd731aca498d7257483370968
ERROR - 2014-09-03 09:10:25 --> login :: 775adf7dd731aca498d7257483370968 :: 775adf7dd731aca498d7257483370968 :: Checkout widget
ERROR - 2014-09-03 09:10:25 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:12:53 --> login :: d549c971cd39bd9b17acadfb1bb8a9c2 :: d549c971cd39bd9b17acadfb1bb8a9c2
ERROR - 2014-09-03 09:12:53 --> login :: d549c971cd39bd9b17acadfb1bb8a9c2 :: d549c971cd39bd9b17acadfb1bb8a9c2 :: Checkout widget
ERROR - 2014-09-03 09:12:53 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:20:04 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:20:14 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:30:26 --> login :: c104c4fc98a99c155a8949428f588206 :: c104c4fc98a99c155a8949428f588206
ERROR - 2014-09-03 09:30:26 --> login :: c104c4fc98a99c155a8949428f588206 :: c104c4fc98a99c155a8949428f588206 :: Checkout widget
ERROR - 2014-09-03 09:30:26 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:31:06 --> login :: d4f315441755647058513ba7bf9f2418 :: d4f315441755647058513ba7bf9f2418
ERROR - 2014-09-03 09:31:06 --> login :: d4f315441755647058513ba7bf9f2418 :: d4f315441755647058513ba7bf9f2418 :: Checkout widget
ERROR - 2014-09-03 09:31:06 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:32:22 --> login :: c8ee3cce862644bad90738868aeb7766 :: c8ee3cce862644bad90738868aeb7766
ERROR - 2014-09-03 09:32:22 --> login :: c8ee3cce862644bad90738868aeb7766 :: c8ee3cce862644bad90738868aeb7766 :: Checkout widget
ERROR - 2014-09-03 09:32:22 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:36:50 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 09:37:58 --> login :: 8e74b636465279f2da4cdda1e74582df :: 8e74b636465279f2da4cdda1e74582df
ERROR - 2014-09-03 09:37:58 --> login :: 8e74b636465279f2da4cdda1e74582df :: 8e74b636465279f2da4cdda1e74582df :: Checkout widget
ERROR - 2014-09-03 09:37:58 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:44:25 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:46:24 --> introduction :: 6da271eb218005dfbde48ba73cd8c345 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 09:46:24 --> introduction :: 6da271eb218005dfbde48ba73cd8c345 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 09:46:24 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 09:46:24 --> introduction :: 6da271eb218005dfbde48ba73cd8c345 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 09:46:59 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:48:08 --> login :: 01608502a1fc455b83cda90ca7c627ad :: 01608502a1fc455b83cda90ca7c627ad
ERROR - 2014-09-03 09:48:08 --> login :: 01608502a1fc455b83cda90ca7c627ad :: 01608502a1fc455b83cda90ca7c627ad :: Checkout widget
ERROR - 2014-09-03 09:48:08 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 09:54:13 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 09:54:20 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 10:08:36 --> login :: 94da99804dce7401d70bcf60b2cba93e :: 94da99804dce7401d70bcf60b2cba93e
ERROR - 2014-09-03 10:08:36 --> login :: 94da99804dce7401d70bcf60b2cba93e :: 94da99804dce7401d70bcf60b2cba93e :: Checkout widget
ERROR - 2014-09-03 10:08:36 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:21:11 --> login :: 95a0d002389032cef2e64dba33137a8e :: 95a0d002389032cef2e64dba33137a8e
ERROR - 2014-09-03 10:21:11 --> login :: 95a0d002389032cef2e64dba33137a8e :: 95a0d002389032cef2e64dba33137a8e :: Checkout widget
ERROR - 2014-09-03 10:21:11 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:25:05 --> introduction :: 5d65be209003944f50dfab14d1ccbad6 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 10:25:05 --> introduction :: 5d65be209003944f50dfab14d1ccbad6 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 10:25:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:25:05 --> introduction :: 5d65be209003944f50dfab14d1ccbad6 :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 10:35:27 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 10:37:15 --> login :: 089018dd6643f9eadedec81e1314742f :: 089018dd6643f9eadedec81e1314742f
ERROR - 2014-09-03 10:37:15 --> login :: 089018dd6643f9eadedec81e1314742f :: 089018dd6643f9eadedec81e1314742f :: Checkout widget
ERROR - 2014-09-03 10:37:15 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:39:20 --> login :: 6bb7fee8f4fa2d7cf8fa3be5e3394f1d :: 6bb7fee8f4fa2d7cf8fa3be5e3394f1d
ERROR - 2014-09-03 10:39:20 --> login :: 6bb7fee8f4fa2d7cf8fa3be5e3394f1d :: 6bb7fee8f4fa2d7cf8fa3be5e3394f1d :: Checkout widget
ERROR - 2014-09-03 10:39:20 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:44:50 --> login :: 243cec72d762f9ca318c02724df4c5b2 :: 243cec72d762f9ca318c02724df4c5b2
ERROR - 2014-09-03 10:44:50 --> login :: 243cec72d762f9ca318c02724df4c5b2 :: 243cec72d762f9ca318c02724df4c5b2 :: Checkout widget
ERROR - 2014-09-03 10:44:50 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:48:27 --> login :: f134ff2af821d4712ff07fd7562dad8a :: f134ff2af821d4712ff07fd7562dad8a
ERROR - 2014-09-03 10:48:27 --> login :: f134ff2af821d4712ff07fd7562dad8a :: f134ff2af821d4712ff07fd7562dad8a :: Checkout widget
ERROR - 2014-09-03 10:48:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:49:15 --> login :: 0c867a8f36c1355d180192b429a8bf0a :: 0c867a8f36c1355d180192b429a8bf0a
ERROR - 2014-09-03 10:49:15 --> login :: 0c867a8f36c1355d180192b429a8bf0a :: 0c867a8f36c1355d180192b429a8bf0a :: Checkout widget
ERROR - 2014-09-03 10:49:15 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:49:55 --> introduction :: 512617f0e0385219e7c6fc46e211685e introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 10:49:55 --> introduction :: 512617f0e0385219e7c6fc46e211685e :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 10:49:55 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:49:55 --> introduction :: 512617f0e0385219e7c6fc46e211685e :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 10:52:57 --> login :: 4275275d9b22b31fecea91d42c605f29 :: 4275275d9b22b31fecea91d42c605f29
ERROR - 2014-09-03 10:52:57 --> login :: 4275275d9b22b31fecea91d42c605f29 :: 4275275d9b22b31fecea91d42c605f29 :: Checkout widget
ERROR - 2014-09-03 10:52:57 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:55:38 --> introduction :: ba1233497956e3651bb46ab5bfab9a53 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 10:55:38 --> introduction :: ba1233497956e3651bb46ab5bfab9a53 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 10:55:38 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 10:55:38 --> introduction :: ba1233497956e3651bb46ab5bfab9a53 :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 10:55:49 --> how_it_works :: ba1233497956e3651bb46ab5bfab9a53
ERROR - 2014-09-03 10:55:56 -->  OTA URL :: http://www.travelpack.com/
ERROR - 2014-09-03 10:55:56 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 10:55:59 --> CURL :: options :: No option
ERROR - 2014-09-03 10:55:59 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 10:55:59 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 10:55:59 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 10:55:59 --> personal_details :: ba1233497956e3651bb46ab5bfab9a53 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 10:56:14 --> pre_contract_information :: ba1233497956e3651bb46ab5bfab9a53
ERROR - 2014-09-03 11:00:25 --> login :: 848047835cca615455973c9ea8482b13 :: 848047835cca615455973c9ea8482b13
ERROR - 2014-09-03 11:00:25 --> login :: 848047835cca615455973c9ea8482b13 :: 848047835cca615455973c9ea8482b13 :: Checkout widget
ERROR - 2014-09-03 11:00:26 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:06:44 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:06:46 --> login :: a1d473454ecb9c6bd9e10bb7b0d33525 :: a1d473454ecb9c6bd9e10bb7b0d33525
ERROR - 2014-09-03 11:06:46 --> login :: a1d473454ecb9c6bd9e10bb7b0d33525 :: a1d473454ecb9c6bd9e10bb7b0d33525 :: Checkout widget
ERROR - 2014-09-03 11:06:46 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:06:58 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:09:51 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:12:35 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:13:11 --> introduction :: 2b69432b691699c0d12875b626601bd4 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 11:13:11 --> introduction :: 2b69432b691699c0d12875b626601bd4 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 11:13:11 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 11:13:11 --> introduction :: 2b69432b691699c0d12875b626601bd4 :: Partner URL https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 11:18:07 --> login :: c368de8c552cfbb7714fb00cf9775406 :: c368de8c552cfbb7714fb00cf9775406
ERROR - 2014-09-03 11:18:07 --> login :: c368de8c552cfbb7714fb00cf9775406 :: c368de8c552cfbb7714fb00cf9775406 :: Checkout widget
ERROR - 2014-09-03 11:18:07 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:19:38 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:37:39 --> login :: 87722ad1064723b5f2b1c8d1060f696d :: 87722ad1064723b5f2b1c8d1060f696d
ERROR - 2014-09-03 11:37:39 --> login :: 87722ad1064723b5f2b1c8d1060f696d :: 87722ad1064723b5f2b1c8d1060f696d :: Checkout widget
ERROR - 2014-09-03 11:37:39 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:39:04 --> login :: 67d59f7f09db46b0cde5462f3ff3647b :: 67d59f7f09db46b0cde5462f3ff3647b
ERROR - 2014-09-03 11:39:04 --> login :: 67d59f7f09db46b0cde5462f3ff3647b :: 67d59f7f09db46b0cde5462f3ff3647b :: Checkout widget
ERROR - 2014-09-03 11:39:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:44:59 --> login :: f2ce1f6dc446b6436637e1af7fa0056a :: f2ce1f6dc446b6436637e1af7fa0056a
ERROR - 2014-09-03 11:44:59 --> login :: f2ce1f6dc446b6436637e1af7fa0056a :: f2ce1f6dc446b6436637e1af7fa0056a :: Checkout widget
ERROR - 2014-09-03 11:44:59 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:45:17 --> introduction :: 63c0e3012d20200c6102dcb363dc7e9c introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/?gclid=CjwKEAjw-JqgBRCAyqjoic27nlQSJABBTpFE6IV0nqJzVsA9JrOWuM-L5ZtoVAKu1PiO6IOxmsxCvxoCdmHw_wcB
ERROR - 2014-09-03 11:45:17 --> introduction :: 63c0e3012d20200c6102dcb363dc7e9c :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 11:45:17 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 11:45:17 --> introduction :: 63c0e3012d20200c6102dcb363dc7e9c :: Partner URL https://www.travelfund.co.uk/how/?gclid=CjwKEAjw-JqgBRCAyqjoic27nlQSJABBTpFE6IV0nqJzVsA9JrOWuM-L5ZtoVAKu1PiO6IOxmsxCvxoCdmHw_wcB
ERROR - 2014-09-03 11:47:43 --> login :: d5b3df28e94dbfa2d16e0e3bf49ae98b :: d5b3df28e94dbfa2d16e0e3bf49ae98b
ERROR - 2014-09-03 11:47:43 --> login :: d5b3df28e94dbfa2d16e0e3bf49ae98b :: d5b3df28e94dbfa2d16e0e3bf49ae98b :: Checkout widget
ERROR - 2014-09-03 11:47:43 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 11:48:34 --> customer_eligibility_response :: 63c0e3012d20200c6102dcb363dc7e9c :: 63c0e3012d20200c6102dcb363dc7e9c
ERROR - 2014-09-03 11:49:00 --> customer_eligibility_response :: 63c0e3012d20200c6102dcb363dc7e9c :: 63c0e3012d20200c6102dcb363dc7e9c
ERROR - 2014-09-03 11:49:43 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 11:49:50 --> customer_eligibility_response :: 63c0e3012d20200c6102dcb363dc7e9c :: 63c0e3012d20200c6102dcb363dc7e9c
ERROR - 2014-09-03 11:52:43 --> login :: b15efa5d8952e36d60dc7de5d4e16197 :: b15efa5d8952e36d60dc7de5d4e16197
ERROR - 2014-09-03 11:52:43 --> login :: b15efa5d8952e36d60dc7de5d4e16197 :: b15efa5d8952e36d60dc7de5d4e16197 :: Checkout widget
ERROR - 2014-09-03 11:52:43 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:02:01 --> login :: b674f8328d370d588fc7a87d9e14dede :: b674f8328d370d588fc7a87d9e14dede
ERROR - 2014-09-03 12:02:01 --> login :: b674f8328d370d588fc7a87d9e14dede :: b674f8328d370d588fc7a87d9e14dede :: Checkout widget
ERROR - 2014-09-03 12:02:01 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:02:42 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:06:45 --> login :: 5091514ba5a3ab70a32ac7ab2ed068cd :: 5091514ba5a3ab70a32ac7ab2ed068cd
ERROR - 2014-09-03 12:06:45 --> login :: 5091514ba5a3ab70a32ac7ab2ed068cd :: 5091514ba5a3ab70a32ac7ab2ed068cd :: Checkout widget
ERROR - 2014-09-03 12:06:45 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:11:25 --> login :: a18e6397e2ee1b7ef3d78ea0d96cecca :: a18e6397e2ee1b7ef3d78ea0d96cecca
ERROR - 2014-09-03 12:11:25 --> login :: a18e6397e2ee1b7ef3d78ea0d96cecca :: a18e6397e2ee1b7ef3d78ea0d96cecca :: Checkout widget
ERROR - 2014-09-03 12:11:25 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:16:08 --> Severity: Notice  --> Undefined variable: data /var/www/html/travelfund/tf-application/views/partnersContact.php 15
ERROR - 2014-09-03 12:17:55 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:22:31 --> login :: cdcc184391a10ad5d60898b9b5013822 :: cdcc184391a10ad5d60898b9b5013822
ERROR - 2014-09-03 12:22:31 --> login :: cdcc184391a10ad5d60898b9b5013822 :: cdcc184391a10ad5d60898b9b5013822 :: Checkout widget
ERROR - 2014-09-03 12:22:31 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:26:29 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:34:14 --> introduction :: c2de177772d044ece57a26f62e803d3b introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 12:34:14 --> introduction :: c2de177772d044ece57a26f62e803d3b :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 12:34:14 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:34:14 --> introduction :: c2de177772d044ece57a26f62e803d3b :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 12:34:40 --> introduction :: 7c784a273514fe53c932c32ae1771dfa introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 12:34:40 --> introduction :: 7c784a273514fe53c932c32ae1771dfa :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 12:34:40 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:34:40 --> introduction :: 7c784a273514fe53c932c32ae1771dfa :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 12:34:56 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:35:04 --> introduction :: 4e2db7adb56d659d39b7e104fc2fdb98 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 12:35:04 --> introduction :: 4e2db7adb56d659d39b7e104fc2fdb98 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 12:35:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:35:04 --> introduction :: 4e2db7adb56d659d39b7e104fc2fdb98 :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 12:35:04 --> introduction :: 2544df0dd761725e4c0fc8da8c3bb8ca introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 12:35:04 --> introduction :: 2544df0dd761725e4c0fc8da8c3bb8ca :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 12:35:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:35:04 --> introduction :: 2544df0dd761725e4c0fc8da8c3bb8ca :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 12:35:22 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:36:08 --> login :: b39cbd87999b30b5f36780041d99f899 :: b39cbd87999b30b5f36780041d99f899
ERROR - 2014-09-03 12:36:08 --> login :: b39cbd87999b30b5f36780041d99f899 :: b39cbd87999b30b5f36780041d99f899 :: Checkout widget
ERROR - 2014-09-03 12:36:08 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:40:34 --> login :: e95d5ec6b49ddadb3c01a65875b11d49 :: e95d5ec6b49ddadb3c01a65875b11d49
ERROR - 2014-09-03 12:40:34 --> login :: e95d5ec6b49ddadb3c01a65875b11d49 :: e95d5ec6b49ddadb3c01a65875b11d49 :: Checkout widget
ERROR - 2014-09-03 12:40:34 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:46:40 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 12:50:55 --> introduction :: 994e90e4093d708479e8d91fa993ce48 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CNW6n8H9xMACFQgYwwodlacAXw
ERROR - 2014-09-03 12:50:55 --> introduction :: 994e90e4093d708479e8d91fa993ce48 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 12:50:55 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 12:50:55 --> introduction :: 994e90e4093d708479e8d91fa993ce48 :: Partner URL https://www.travelfund.co.uk/?gclid=CNW6n8H9xMACFQgYwwodlacAXw
ERROR - 2014-09-03 12:51:26 --> how_it_works :: 994e90e4093d708479e8d91fa993ce48
ERROR - 2014-09-03 12:51:32 --> customer_eligiblity_details :: 994e90e4093d708479e8d91fa993ce48
ERROR - 2014-09-03 12:53:38 --> customer_eligibility_response :: 994e90e4093d708479e8d91fa993ce48 :: 994e90e4093d708479e8d91fa993ce48
ERROR - 2014-09-03 12:53:52 --> introduction :: a517bf9f7a1a32019c8ba17093e8a235 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CNW6n8H9xMACFQgYwwodlacAXw
ERROR - 2014-09-03 12:53:52 --> introduction :: a517bf9f7a1a32019c8ba17093e8a235 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 12:53:52 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 12:53:52 --> introduction :: a517bf9f7a1a32019c8ba17093e8a235 :: Partner URL https://www.travelfund.co.uk/?gclid=CNW6n8H9xMACFQgYwwodlacAXw
ERROR - 2014-09-03 12:54:12 --> how_it_works :: a517bf9f7a1a32019c8ba17093e8a235
ERROR - 2014-09-03 12:54:17 --> customer_eligiblity_details :: a517bf9f7a1a32019c8ba17093e8a235
ERROR - 2014-09-03 12:54:39 --> login :: a27f094f6e45aacb8933f993dabc1b32 :: a27f094f6e45aacb8933f993dabc1b32
ERROR - 2014-09-03 12:54:39 --> login :: a27f094f6e45aacb8933f993dabc1b32 :: a27f094f6e45aacb8933f993dabc1b32 :: Checkout widget
ERROR - 2014-09-03 12:54:39 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:55:34 --> login :: 83b89dff562cb83e6a3ee397b22afd2f :: 83b89dff562cb83e6a3ee397b22afd2f
ERROR - 2014-09-03 12:55:34 --> login :: 83b89dff562cb83e6a3ee397b22afd2f :: 83b89dff562cb83e6a3ee397b22afd2f :: Checkout widget
ERROR - 2014-09-03 12:55:34 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 12:56:04 --> customer_eligibility_response :: a517bf9f7a1a32019c8ba17093e8a235 :: a517bf9f7a1a32019c8ba17093e8a235
ERROR - 2014-09-03 12:56:21 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 12:56:24 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 12:56:32 --> login :: 7abb2813a1b67b61d2493ec8ee4ebb77 :: 7abb2813a1b67b61d2493ec8ee4ebb77
ERROR - 2014-09-03 12:56:32 --> login :: 7abb2813a1b67b61d2493ec8ee4ebb77 :: 7abb2813a1b67b61d2493ec8ee4ebb77 :: Checkout widget
ERROR - 2014-09-03 12:56:32 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:02:43 --> login :: 3c4f8bd4c9a1969a1cbdbaed48f3c68c :: 3c4f8bd4c9a1969a1cbdbaed48f3c68c
ERROR - 2014-09-03 13:02:43 --> login :: 3c4f8bd4c9a1969a1cbdbaed48f3c68c :: 3c4f8bd4c9a1969a1cbdbaed48f3c68c :: Checkout widget
ERROR - 2014-09-03 13:02:43 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:02:54 --> login :: 8b771737b24fe8d08b9f1ee052926da5 :: 8b771737b24fe8d08b9f1ee052926da5
ERROR - 2014-09-03 13:02:54 --> login :: 8b771737b24fe8d08b9f1ee052926da5 :: 8b771737b24fe8d08b9f1ee052926da5 :: Checkout widget
ERROR - 2014-09-03 13:02:54 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:04:15 --> introduction :: 0108ded41af9eccc090f327d3381880c introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 13:04:15 --> introduction :: 0108ded41af9eccc090f327d3381880c :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 13:04:15 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:04:15 --> introduction :: 0108ded41af9eccc090f327d3381880c :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 13:07:22 --> login :: 7cb052abba45ad9dd0d2cc898071e310 :: 7cb052abba45ad9dd0d2cc898071e310
ERROR - 2014-09-03 13:07:22 --> login :: 7cb052abba45ad9dd0d2cc898071e310 :: 7cb052abba45ad9dd0d2cc898071e310 :: Checkout widget
ERROR - 2014-09-03 13:07:22 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:07:27 --> login :: 2156a36d5dfb0666cd3066f69c16175f :: 2156a36d5dfb0666cd3066f69c16175f
ERROR - 2014-09-03 13:07:27 --> login :: 2156a36d5dfb0666cd3066f69c16175f :: 2156a36d5dfb0666cd3066f69c16175f :: Checkout widget
ERROR - 2014-09-03 13:07:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:07:40 --> login :: 16cce5e1364b6d6eb90e0ca02fd4b643 :: 16cce5e1364b6d6eb90e0ca02fd4b643
ERROR - 2014-09-03 13:07:40 --> login :: 16cce5e1364b6d6eb90e0ca02fd4b643 :: 16cce5e1364b6d6eb90e0ca02fd4b643 :: Checkout widget
ERROR - 2014-09-03 13:07:40 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:09:02 --> introduction :: 2cc8ee61434c737323f76bb8136e05fe introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 13:09:02 --> introduction :: 2cc8ee61434c737323f76bb8136e05fe :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 13:09:02 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:09:02 --> introduction :: 2cc8ee61434c737323f76bb8136e05fe :: Partner URL http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 13:13:29 --> login :: 1453e39a23ac7c9e1293f1891e0c343d :: 1453e39a23ac7c9e1293f1891e0c343d
ERROR - 2014-09-03 13:13:29 --> login :: 1453e39a23ac7c9e1293f1891e0c343d :: 1453e39a23ac7c9e1293f1891e0c343d :: Checkout widget
ERROR - 2014-09-03 13:13:29 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:22:17 --> login :: 13b34ddedeaf29d9900f9da1058e0b4d :: 13b34ddedeaf29d9900f9da1058e0b4d
ERROR - 2014-09-03 13:22:17 --> login :: 13b34ddedeaf29d9900f9da1058e0b4d :: 13b34ddedeaf29d9900f9da1058e0b4d :: Checkout widget
ERROR - 2014-09-03 13:22:17 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:28:06 --> login :: 55b3f1c9ce245cf014a56d450859f0fe :: 55b3f1c9ce245cf014a56d450859f0fe
ERROR - 2014-09-03 13:28:06 --> login :: 55b3f1c9ce245cf014a56d450859f0fe :: 55b3f1c9ce245cf014a56d450859f0fe :: Checkout widget
ERROR - 2014-09-03 13:28:06 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:37:26 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 13:41:47 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 13:44:07 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 13:58:00 --> login :: 20eb40beef29b4a3f930ad8c365801f1 :: 20eb40beef29b4a3f930ad8c365801f1
ERROR - 2014-09-03 13:58:00 --> login :: 20eb40beef29b4a3f930ad8c365801f1 :: 20eb40beef29b4a3f930ad8c365801f1 :: Checkout widget
ERROR - 2014-09-03 13:58:00 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 13:58:14 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 13:58:34 --> login :: 9e9c22c6cdb44b840318006f5c99fe12 :: 9e9c22c6cdb44b840318006f5c99fe12
ERROR - 2014-09-03 13:58:34 --> login :: 9e9c22c6cdb44b840318006f5c99fe12 :: 9e9c22c6cdb44b840318006f5c99fe12 :: Checkout widget
ERROR - 2014-09-03 13:58:34 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:04:39 --> login :: d305b27000bef1bb2bfa64749357a7c0 :: d305b27000bef1bb2bfa64749357a7c0
ERROR - 2014-09-03 14:04:39 --> login :: d305b27000bef1bb2bfa64749357a7c0 :: d305b27000bef1bb2bfa64749357a7c0 :: Checkout widget
ERROR - 2014-09-03 14:04:39 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:05:59 --> login :: 09489225289c5d7cc50d892dd08debb2 :: 09489225289c5d7cc50d892dd08debb2
ERROR - 2014-09-03 14:05:59 --> login :: 09489225289c5d7cc50d892dd08debb2 :: 09489225289c5d7cc50d892dd08debb2 :: Checkout widget
ERROR - 2014-09-03 14:05:59 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:06:06 --> login :: 6bd056cb619fee0892334ef069bcac35 :: 6bd056cb619fee0892334ef069bcac35
ERROR - 2014-09-03 14:06:06 --> login :: 6bd056cb619fee0892334ef069bcac35 :: 6bd056cb619fee0892334ef069bcac35 :: Checkout widget
ERROR - 2014-09-03 14:06:06 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:07:49 --> login :: 418dc9e5ddcc029a5ff889058034ecfd :: 418dc9e5ddcc029a5ff889058034ecfd
ERROR - 2014-09-03 14:07:49 --> login :: 418dc9e5ddcc029a5ff889058034ecfd :: 418dc9e5ddcc029a5ff889058034ecfd :: Checkout widget
ERROR - 2014-09-03 14:07:49 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:09:00 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 14:10:29 --> login :: ae374fee3f2277b2ea735335a50def20 :: ae374fee3f2277b2ea735335a50def20
ERROR - 2014-09-03 14:10:29 --> login :: ae374fee3f2277b2ea735335a50def20 :: ae374fee3f2277b2ea735335a50def20 :: Checkout widget
ERROR - 2014-09-03 14:10:29 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:13:23 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 14:22:07 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 14:22:22 --> introduction :: b5b1d80862f85ade42946fd01532eef1 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CIfIqv6RxcACFarjwgodZGwAoQ
ERROR - 2014-09-03 14:22:22 --> introduction :: b5b1d80862f85ade42946fd01532eef1 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 14:22:22 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 14:22:22 --> introduction :: b5b1d80862f85ade42946fd01532eef1 :: Partner URL https://www.travelfund.co.uk/?gclid=CIfIqv6RxcACFarjwgodZGwAoQ
ERROR - 2014-09-03 14:22:40 --> introduction :: 80f57450a4388bccd82e73ee15170e83 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CIfIqv6RxcACFarjwgodZGwAoQ
ERROR - 2014-09-03 14:22:40 --> introduction :: 80f57450a4388bccd82e73ee15170e83 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 14:22:40 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 14:22:40 --> introduction :: 80f57450a4388bccd82e73ee15170e83 :: Partner URL https://www.travelfund.co.uk/?gclid=CIfIqv6RxcACFarjwgodZGwAoQ
ERROR - 2014-09-03 14:23:05 --> login :: 48e70dd08e75b662233c9cb00aaa4e63 :: 48e70dd08e75b662233c9cb00aaa4e63
ERROR - 2014-09-03 14:23:05 --> login :: 48e70dd08e75b662233c9cb00aaa4e63 :: 48e70dd08e75b662233c9cb00aaa4e63 :: Checkout widget
ERROR - 2014-09-03 14:23:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:29:02 --> login :: fa94a315d633edd6335bcda5ba25e39d :: fa94a315d633edd6335bcda5ba25e39d
ERROR - 2014-09-03 14:29:02 --> login :: fa94a315d633edd6335bcda5ba25e39d :: fa94a315d633edd6335bcda5ba25e39d :: Checkout widget
ERROR - 2014-09-03 14:29:02 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:35:50 --> login :: 61e88d7c5e1b6da4e1f277d0a094b282 :: 61e88d7c5e1b6da4e1f277d0a094b282
ERROR - 2014-09-03 14:35:50 --> login :: 61e88d7c5e1b6da4e1f277d0a094b282 :: 61e88d7c5e1b6da4e1f277d0a094b282 :: Checkout widget
ERROR - 2014-09-03 14:35:50 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:42:45 --> login :: 43d56caaded9149e2cfc97fa9f4622fb :: 43d56caaded9149e2cfc97fa9f4622fb
ERROR - 2014-09-03 14:42:45 --> login :: 43d56caaded9149e2cfc97fa9f4622fb :: 43d56caaded9149e2cfc97fa9f4622fb :: Checkout widget
ERROR - 2014-09-03 14:42:45 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:44:39 --> login :: 100b8119101d35b022bc2a0f9998b578 :: 100b8119101d35b022bc2a0f9998b578
ERROR - 2014-09-03 14:44:39 --> login :: 100b8119101d35b022bc2a0f9998b578 :: 100b8119101d35b022bc2a0f9998b578 :: Checkout widget
ERROR - 2014-09-03 14:44:39 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 14:48:57 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 14:48:57 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 14:49:51 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 14:50:42 --> 404 Page Not Found --> partner
ERROR - 2014-09-03 14:58:38 --> login :: 8e15cc40da8aaf77c32e1ce6a1d3fc0f :: 8e15cc40da8aaf77c32e1ce6a1d3fc0f
ERROR - 2014-09-03 14:58:38 --> login :: 8e15cc40da8aaf77c32e1ce6a1d3fc0f :: 8e15cc40da8aaf77c32e1ce6a1d3fc0f :: Checkout widget
ERROR - 2014-09-03 14:58:38 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:00:01 --> login :: 0f8389aa8b7e230fc354c950b300b18d :: 0f8389aa8b7e230fc354c950b300b18d
ERROR - 2014-09-03 15:00:01 --> login :: 0f8389aa8b7e230fc354c950b300b18d :: 0f8389aa8b7e230fc354c950b300b18d :: Checkout widget
ERROR - 2014-09-03 15:00:01 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:02:20 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:02:51 --> login :: 3dea0dc5ce9e9944ec270f323778adfe :: 3dea0dc5ce9e9944ec270f323778adfe
ERROR - 2014-09-03 15:02:51 --> login :: 3dea0dc5ce9e9944ec270f323778adfe :: 3dea0dc5ce9e9944ec270f323778adfe :: Checkout widget
ERROR - 2014-09-03 15:02:51 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:05:33 --> login :: 406fd8455096938447b0f0fb7926c542 :: 406fd8455096938447b0f0fb7926c542
ERROR - 2014-09-03 15:05:33 --> login :: 406fd8455096938447b0f0fb7926c542 :: 406fd8455096938447b0f0fb7926c542 :: Checkout widget
ERROR - 2014-09-03 15:05:33 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:07:34 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:08:37 --> introduction :: 01ded852add17761d50a202704dbaf50 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/?gclid=CKWlpo-cxcACFVGWtAodOzQACA
ERROR - 2014-09-03 15:08:37 --> introduction :: 01ded852add17761d50a202704dbaf50 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 15:08:37 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 15:08:37 --> introduction :: 01ded852add17761d50a202704dbaf50 :: Partner URL https://www.travelfund.co.uk/?gclid=CKWlpo-cxcACFVGWtAodOzQACA
ERROR - 2014-09-03 15:10:20 --> login :: 1d42f3b6c2cfaa43d643fc8e6637b6ad :: 1d42f3b6c2cfaa43d643fc8e6637b6ad
ERROR - 2014-09-03 15:10:20 --> login :: 1d42f3b6c2cfaa43d643fc8e6637b6ad :: 1d42f3b6c2cfaa43d643fc8e6637b6ad :: Checkout widget
ERROR - 2014-09-03 15:10:20 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:12:27 --> login :: 4ad006ddffbdf822e6cdc04ea2aa3b30 :: 4ad006ddffbdf822e6cdc04ea2aa3b30
ERROR - 2014-09-03 15:12:27 --> login :: 4ad006ddffbdf822e6cdc04ea2aa3b30 :: 4ad006ddffbdf822e6cdc04ea2aa3b30 :: Checkout widget
ERROR - 2014-09-03 15:12:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:18:46 --> login :: ca36a396851c49adb2d02210c319910a :: ca36a396851c49adb2d02210c319910a
ERROR - 2014-09-03 15:18:46 --> login :: ca36a396851c49adb2d02210c319910a :: ca36a396851c49adb2d02210c319910a :: Checkout widget
ERROR - 2014-09-03 15:18:46 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:22:01 --> login :: 517ad80131deb351326b2ce3ef39b934 :: 517ad80131deb351326b2ce3ef39b934
ERROR - 2014-09-03 15:22:01 --> login :: 517ad80131deb351326b2ce3ef39b934 :: 517ad80131deb351326b2ce3ef39b934 :: Checkout widget
ERROR - 2014-09-03 15:22:01 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:28:52 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:33:00 --> login :: e016402df47fb6a0cb7c29b0e9f67600 :: e016402df47fb6a0cb7c29b0e9f67600
ERROR - 2014-09-03 15:33:00 --> login :: e016402df47fb6a0cb7c29b0e9f67600 :: e016402df47fb6a0cb7c29b0e9f67600 :: Checkout widget
ERROR - 2014-09-03 15:33:00 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:35:00 --> introduction :: 7e9dcfab332e2a8f449ffc837b4b7774 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 15:35:00 --> introduction :: 7e9dcfab332e2a8f449ffc837b4b7774 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 15:35:00 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 15:35:00 --> introduction :: 7e9dcfab332e2a8f449ffc837b4b7774 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 15:35:05 --> how_it_works :: 7e9dcfab332e2a8f449ffc837b4b7774
ERROR - 2014-09-03 15:35:35 --> login :: af7e291dbb7f3b3fcb61357fecd0f4bd :: af7e291dbb7f3b3fcb61357fecd0f4bd
ERROR - 2014-09-03 15:35:35 --> login :: af7e291dbb7f3b3fcb61357fecd0f4bd :: af7e291dbb7f3b3fcb61357fecd0f4bd :: Checkout widget
ERROR - 2014-09-03 15:35:35 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:35:48 --> introduction :: 097cb9230a08cb3ffaf48475277dc7bc introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 15:35:48 --> introduction :: 097cb9230a08cb3ffaf48475277dc7bc :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 15:35:48 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 15:35:48 --> introduction :: 097cb9230a08cb3ffaf48475277dc7bc :: Partner URL https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 15:35:50 --> how_it_works :: 097cb9230a08cb3ffaf48475277dc7bc
ERROR - 2014-09-03 15:35:51 -->  OTA URL :: https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 15:35:51 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 15:35:54 --> CURL :: options :: No option
ERROR - 2014-09-03 15:35:54 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 15:35:54 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 15:35:54 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 15:35:54 --> personal_details :: 097cb9230a08cb3ffaf48475277dc7bc :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 15:35:56 --> display_security_privacy :: 097cb9230a08cb3ffaf48475277dc7bc
ERROR - 2014-09-03 15:36:12 --> summary_terms_conditions :: 097cb9230a08cb3ffaf48475277dc7bc
ERROR - 2014-09-03 15:38:54 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 15:38:55 --> 404 Page Not Found --> defaultsite
ERROR - 2014-09-03 15:39:32 --> login :: 435c6787efa69e1e06fc8bfc3e7ebaa2 :: 435c6787efa69e1e06fc8bfc3e7ebaa2
ERROR - 2014-09-03 15:39:32 --> login :: 435c6787efa69e1e06fc8bfc3e7ebaa2 :: 435c6787efa69e1e06fc8bfc3e7ebaa2 :: Checkout widget
ERROR - 2014-09-03 15:39:32 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:40:45 --> pre_contract_information :: 097cb9230a08cb3ffaf48475277dc7bc
ERROR - 2014-09-03 15:44:38 --> introduction :: 0b5fae1dc6c969f654f9a3c0a9359fb4 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 15:44:38 --> introduction :: 0b5fae1dc6c969f654f9a3c0a9359fb4 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 15:44:38 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:44:38 --> introduction :: 0b5fae1dc6c969f654f9a3c0a9359fb4 :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 15:44:40 --> how_it_works :: 0b5fae1dc6c969f654f9a3c0a9359fb4
ERROR - 2014-09-03 15:48:04 --> login :: 60b36abef9aacd3460acc496b134823f :: 60b36abef9aacd3460acc496b134823f
ERROR - 2014-09-03 15:48:04 --> login :: 60b36abef9aacd3460acc496b134823f :: 60b36abef9aacd3460acc496b134823f :: Checkout widget
ERROR - 2014-09-03 15:48:04 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:49:17 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:49:32 --> introduction :: 4346488d5f7508c816390cacdcf0ee56 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/?gclid=CJeHn7ilxcACFUex2wod6hMArg
ERROR - 2014-09-03 15:49:32 --> introduction :: 4346488d5f7508c816390cacdcf0ee56 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 15:49:32 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 15:49:32 --> introduction :: 4346488d5f7508c816390cacdcf0ee56 :: Partner URL https://www.travelfund.co.uk/how/?gclid=CJeHn7ilxcACFUex2wod6hMArg
ERROR - 2014-09-03 15:49:51 --> how_it_works :: 4346488d5f7508c816390cacdcf0ee56
ERROR - 2014-09-03 15:49:57 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CJeHn7ilxcACFUex2wod6hMArg
ERROR - 2014-09-03 15:49:57 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 15:49:57 --> CURL :: options :: No option
ERROR - 2014-09-03 15:49:57 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 15:49:57 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 15:49:57 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 15:49:57 --> personal_details :: 4346488d5f7508c816390cacdcf0ee56 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 15:51:39 --> login :: a2c2c59a012852d9a6e03413c427b406 :: a2c2c59a012852d9a6e03413c427b406
ERROR - 2014-09-03 15:51:39 --> login :: a2c2c59a012852d9a6e03413c427b406 :: a2c2c59a012852d9a6e03413c427b406 :: Checkout widget
ERROR - 2014-09-03 15:51:39 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:53:30 --> login :: cffe03515b99826ec7d41428363ef51f :: cffe03515b99826ec7d41428363ef51f
ERROR - 2014-09-03 15:53:30 --> login :: cffe03515b99826ec7d41428363ef51f :: cffe03515b99826ec7d41428363ef51f :: Checkout widget
ERROR - 2014-09-03 15:53:30 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 15:56:17 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:56:51 --> introduction :: e24e4a86431e35e1568321695ac26272 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/?gclid=CMOamv-mxcACFQrjwgodhGcAdg
ERROR - 2014-09-03 15:56:51 --> introduction :: e24e4a86431e35e1568321695ac26272 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 15:56:51 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 15:56:51 --> introduction :: e24e4a86431e35e1568321695ac26272 :: Partner URL https://www.travelfund.co.uk/how/?gclid=CMOamv-mxcACFQrjwgodhGcAdg
ERROR - 2014-09-03 15:57:04 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 15:57:22 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 15:59:17 --> customer_eligibility_response :: e24e4a86431e35e1568321695ac26272 :: e24e4a86431e35e1568321695ac26272
ERROR - 2014-09-03 15:59:47 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:00:35 --> login :: adfc664187c4fc41826133e7e4e2df38 :: adfc664187c4fc41826133e7e4e2df38
ERROR - 2014-09-03 16:00:35 --> login :: adfc664187c4fc41826133e7e4e2df38 :: adfc664187c4fc41826133e7e4e2df38 :: Checkout widget
ERROR - 2014-09-03 16:00:35 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:00:47 --> login :: b63229e4f1f6d0a5fccd2a4af60372b8 :: b63229e4f1f6d0a5fccd2a4af60372b8
ERROR - 2014-09-03 16:00:47 --> login :: b63229e4f1f6d0a5fccd2a4af60372b8 :: b63229e4f1f6d0a5fccd2a4af60372b8 :: Checkout widget
ERROR - 2014-09-03 16:00:47 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:01:05 --> login :: bff6e78602264c3d6341ac72f5702d94 :: bff6e78602264c3d6341ac72f5702d94
ERROR - 2014-09-03 16:01:05 --> login :: bff6e78602264c3d6341ac72f5702d94 :: bff6e78602264c3d6341ac72f5702d94 :: Checkout widget
ERROR - 2014-09-03 16:01:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:07:06 -->  OTA URL :: http://www.travelpack.com/
ERROR - 2014-09-03 16:07:06 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 16:07:06 --> CURL :: options :: No option
ERROR - 2014-09-03 16:07:06 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 16:07:06 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 16:07:06 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 16:07:06 --> personal_details :: 3182bc5f4139351ba1d86670a7ab5468 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 16:07:27 --> display_security_privacy :: 3182bc5f4139351ba1d86670a7ab5468
ERROR - 2014-09-03 16:07:31 --> pre_contract_information :: 3182bc5f4139351ba1d86670a7ab5468
ERROR - 2014-09-03 16:07:40 --> introduction :: 929c49533e34bade5a7053f0f59293c7 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 16:07:40 --> introduction :: 929c49533e34bade5a7053f0f59293c7 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 16:07:40 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:07:40 --> introduction :: 929c49533e34bade5a7053f0f59293c7 :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 16:07:42 --> how_it_works :: 929c49533e34bade5a7053f0f59293c7
ERROR - 2014-09-03 16:07:44 --> customer_eligiblity_details :: 929c49533e34bade5a7053f0f59293c7
ERROR - 2014-09-03 16:08:30 --> eligibility_terms_conditions :: 929c49533e34bade5a7053f0f59293c7
ERROR - 2014-09-03 16:09:20 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 16:09:23 --> customer_eligibility_response :: 929c49533e34bade5a7053f0f59293c7 :: 929c49533e34bade5a7053f0f59293c7
ERROR - 2014-09-03 16:09:25 --> CURL :: options :: {"key":"92ZXJKzrFNcJdNZy0chAoQ","async":false,"template_name":"1-hd-decision-acceptance","template_content":[[]],"message":{"from_email":"donotreply@travelfund.co.uk","to":[{"email":"jasperdykes@gmail.com","name":"Jasper"}],"merge":true,"merge_vars":[{"rcpt":"jasperdykes@gmail.com","vars":[{"name":"base_url","content":"https:\/\/www.travelfund.co.uk\/"},{"name":"name","content":"Jasper"},{"name":"apply_now","content":"https:\/\/www.travelfund.co.uk\/"}]}],"tags":[{"tags":"1-hd-decision-acceptance"}],"track_opens":false,"track_clicks":false}}
ERROR - 2014-09-03 16:09:25 --> CURL ::  Curl info https://mandrillapp.com/api/1.0/messages/send-template.php
ERROR - 2014-09-03 16:09:32 -->  OTA URL :: http://www.travelpack.com/
ERROR - 2014-09-03 16:09:32 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 16:09:32 --> CURL :: options :: No option
ERROR - 2014-09-03 16:09:32 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 16:09:32 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 16:09:32 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 16:09:32 --> personal_details :: 929c49533e34bade5a7053f0f59293c7 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 16:10:09 --> introduction :: f8f3cf99b92fa6ffd04fda20198be2dc introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 16:10:09 --> introduction :: f8f3cf99b92fa6ffd04fda20198be2dc :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 16:10:09 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:10:09 --> introduction :: f8f3cf99b92fa6ffd04fda20198be2dc :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 16:10:37 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:10:37 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:10:37 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:10:51 --> login :: 21dc9e34bb8173edfdb00d3362919c8f :: 21dc9e34bb8173edfdb00d3362919c8f
ERROR - 2014-09-03 16:10:51 --> login :: 21dc9e34bb8173edfdb00d3362919c8f :: 21dc9e34bb8173edfdb00d3362919c8f :: Checkout widget
ERROR - 2014-09-03 16:10:51 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:12:33 --> 404 Page Not Found --> Fckeditor
ERROR - 2014-09-03 16:12:35 --> 404 Page Not Found --> admin
ERROR - 2014-09-03 16:12:37 --> 404 Page Not Found --> editor
ERROR - 2014-09-03 16:12:39 --> 404 Page Not Found --> FCKeditor
ERROR - 2014-09-03 16:12:40 --> 404 Page Not Found --> admin
ERROR - 2014-09-03 16:12:42 --> 404 Page Not Found --> editor
ERROR - 2014-09-03 16:17:21 --> login :: c8a8f50f2074f2557a838c7b5e33b814 :: c8a8f50f2074f2557a838c7b5e33b814
ERROR - 2014-09-03 16:17:21 --> login :: c8a8f50f2074f2557a838c7b5e33b814 :: c8a8f50f2074f2557a838c7b5e33b814 :: Checkout widget
ERROR - 2014-09-03 16:17:21 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:23:27 --> login :: 23578550fe193f2f54443eff5341f598 :: 23578550fe193f2f54443eff5341f598
ERROR - 2014-09-03 16:23:27 --> login :: 23578550fe193f2f54443eff5341f598 :: 23578550fe193f2f54443eff5341f598 :: Checkout widget
ERROR - 2014-09-03 16:23:27 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:24:09 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:26:59 --> introduction :: 0382fcb0be43e1f9d07bf4c13cdcfe46 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 16:26:59 --> introduction :: 0382fcb0be43e1f9d07bf4c13cdcfe46 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 16:26:59 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:26:59 --> introduction :: 0382fcb0be43e1f9d07bf4c13cdcfe46 :: Partner URL http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 16:27:50 --> login :: 1a1334c0013c783c8f52be2b829ebadd :: 1a1334c0013c783c8f52be2b829ebadd
ERROR - 2014-09-03 16:27:50 --> login :: 1a1334c0013c783c8f52be2b829ebadd :: 1a1334c0013c783c8f52be2b829ebadd :: Checkout widget
ERROR - 2014-09-03 16:27:50 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:30:21 --> login :: 56dd8fe23b395b54ff3f5fd108b783af :: 56dd8fe23b395b54ff3f5fd108b783af
ERROR - 2014-09-03 16:30:21 --> login :: 56dd8fe23b395b54ff3f5fd108b783af :: 56dd8fe23b395b54ff3f5fd108b783af :: Checkout widget
ERROR - 2014-09-03 16:30:21 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:30:36 --> login :: c857254c3edd708316ceb131d6048365 :: c857254c3edd708316ceb131d6048365
ERROR - 2014-09-03 16:30:36 --> login :: c857254c3edd708316ceb131d6048365 :: c857254c3edd708316ceb131d6048365 :: Checkout widget
ERROR - 2014-09-03 16:30:36 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:44:23 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 16:48:26 --> login :: a73ea94a36e7f89b71d3fe588515d21d :: a73ea94a36e7f89b71d3fe588515d21d
ERROR - 2014-09-03 16:48:26 --> login :: a73ea94a36e7f89b71d3fe588515d21d :: a73ea94a36e7f89b71d3fe588515d21d :: Checkout widget
ERROR - 2014-09-03 16:48:26 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:49:19 --> login :: 5b86967e3db073aee1a991dc399333e8 :: 5b86967e3db073aee1a991dc399333e8
ERROR - 2014-09-03 16:49:19 --> login :: 5b86967e3db073aee1a991dc399333e8 :: 5b86967e3db073aee1a991dc399333e8 :: Checkout widget
ERROR - 2014-09-03 16:49:19 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:49:29 --> introduction :: a96f5d8995ca236cfa05685c28cd8614 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 16:49:29 --> introduction :: a96f5d8995ca236cfa05685c28cd8614 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 16:49:29 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:49:29 --> introduction :: a96f5d8995ca236cfa05685c28cd8614 :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 16:49:37 --> how_it_works :: a96f5d8995ca236cfa05685c28cd8614
ERROR - 2014-09-03 16:49:45 --> customer_eligiblity_details :: a96f5d8995ca236cfa05685c28cd8614
ERROR - 2014-09-03 16:49:55 --> login :: 5a47a33603d46cb61ba1e6ebe42a494c :: 5a47a33603d46cb61ba1e6ebe42a494c
ERROR - 2014-09-03 16:49:55 --> login :: 5a47a33603d46cb61ba1e6ebe42a494c :: 5a47a33603d46cb61ba1e6ebe42a494c :: Checkout widget
ERROR - 2014-09-03 16:49:55 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:51:10 --> login :: ef4f72130c2fa8c37f9ff986894ed013 :: ef4f72130c2fa8c37f9ff986894ed013
ERROR - 2014-09-03 16:51:10 --> login :: ef4f72130c2fa8c37f9ff986894ed013 :: ef4f72130c2fa8c37f9ff986894ed013 :: Checkout widget
ERROR - 2014-09-03 16:51:10 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:51:12 --> customer_eligibility_response :: a96f5d8995ca236cfa05685c28cd8614 :: a96f5d8995ca236cfa05685c28cd8614
ERROR - 2014-09-03 16:53:29 --> login :: 2816d725c41ce45ce8d95cac35a03011 :: 2816d725c41ce45ce8d95cac35a03011
ERROR - 2014-09-03 16:53:29 --> login :: 2816d725c41ce45ce8d95cac35a03011 :: 2816d725c41ce45ce8d95cac35a03011 :: Checkout widget
ERROR - 2014-09-03 16:53:29 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 16:55:13 --> login :: b6933ad37af83a4ce8243f53d2cfb574 :: b6933ad37af83a4ce8243f53d2cfb574
ERROR - 2014-09-03 16:55:13 --> login :: b6933ad37af83a4ce8243f53d2cfb574 :: b6933ad37af83a4ce8243f53d2cfb574 :: Checkout widget
ERROR - 2014-09-03 16:55:13 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:01:18 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 17:02:45 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 17:02:45 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 17:02:50 --> introduction :: c86aa1c68cd7e2cdc74532a5f3551b5b introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:02:50 --> introduction :: c86aa1c68cd7e2cdc74532a5f3551b5b :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 17:02:50 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 17:02:50 --> introduction :: c86aa1c68cd7e2cdc74532a5f3551b5b :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:03:04 --> how_it_works :: c86aa1c68cd7e2cdc74532a5f3551b5b
ERROR - 2014-09-03 17:03:07 -->  OTA URL :: https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:03:07 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 17:03:09 --> CURL :: options :: No option
ERROR - 2014-09-03 17:03:09 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 17:03:09 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 17:03:09 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 17:03:09 --> personal_details :: c86aa1c68cd7e2cdc74532a5f3551b5b :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 17:06:38 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 17:09:01 --> login :: 1c1feddae42be2892c456f7e15e5651e :: 1c1feddae42be2892c456f7e15e5651e
ERROR - 2014-09-03 17:09:01 --> login :: 1c1feddae42be2892c456f7e15e5651e :: 1c1feddae42be2892c456f7e15e5651e :: Checkout widget
ERROR - 2014-09-03 17:09:01 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:09:07 --> login :: 59531b87e0d60240f03566fc01fcfc9f :: 59531b87e0d60240f03566fc01fcfc9f
ERROR - 2014-09-03 17:09:07 --> login :: 59531b87e0d60240f03566fc01fcfc9f :: 59531b87e0d60240f03566fc01fcfc9f :: Checkout widget
ERROR - 2014-09-03 17:09:07 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:11:01 --> introduction :: f63ce178f7c09d8e0451bc8674c3420c introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:11:01 --> introduction :: f63ce178f7c09d8e0451bc8674c3420c :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 17:11:01 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 17:11:01 --> introduction :: f63ce178f7c09d8e0451bc8674c3420c :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:11:11 --> how_it_works :: f63ce178f7c09d8e0451bc8674c3420c
ERROR - 2014-09-03 17:23:21 --> login :: 64bf2104d9c8ffd636dd5a277ac4f4ec :: 64bf2104d9c8ffd636dd5a277ac4f4ec
ERROR - 2014-09-03 17:23:21 --> login :: 64bf2104d9c8ffd636dd5a277ac4f4ec :: 64bf2104d9c8ffd636dd5a277ac4f4ec :: Checkout widget
ERROR - 2014-09-03 17:23:21 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:32:44 --> login :: d6b53c1a814960b3f8bcca01cb4e83c2 :: d6b53c1a814960b3f8bcca01cb4e83c2
ERROR - 2014-09-03 17:32:44 --> login :: d6b53c1a814960b3f8bcca01cb4e83c2 :: d6b53c1a814960b3f8bcca01cb4e83c2 :: Checkout widget
ERROR - 2014-09-03 17:32:44 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:44:38 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 17:46:06 --> introduction :: 94679c33af54dcaa6c8f882d1a48d6eb introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:46:06 --> introduction :: 94679c33af54dcaa6c8f882d1a48d6eb :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 17:46:06 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 17:46:06 --> introduction :: 94679c33af54dcaa6c8f882d1a48d6eb :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:50:30 --> login :: 6631b6cd2055a84acb0ec964b1c0cad9 :: 6631b6cd2055a84acb0ec964b1c0cad9
ERROR - 2014-09-03 17:50:30 --> login :: 6631b6cd2055a84acb0ec964b1c0cad9 :: 6631b6cd2055a84acb0ec964b1c0cad9 :: Checkout widget
ERROR - 2014-09-03 17:50:30 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 17:52:42 --> introduction :: f952e1b4c0ac44fab120b2c1d61cbcd5 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:52:42 --> introduction :: f952e1b4c0ac44fab120b2c1d61cbcd5 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 17:52:42 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 17:52:42 --> introduction :: f952e1b4c0ac44fab120b2c1d61cbcd5 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 17:52:46 --> how_it_works :: f952e1b4c0ac44fab120b2c1d61cbcd5
ERROR - 2014-09-03 17:57:06 --> login :: 1981c5379c6610dc2cc50ddd87a453b8 :: 1981c5379c6610dc2cc50ddd87a453b8
ERROR - 2014-09-03 17:57:06 --> login :: 1981c5379c6610dc2cc50ddd87a453b8 :: 1981c5379c6610dc2cc50ddd87a453b8 :: Checkout widget
ERROR - 2014-09-03 17:57:06 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:05:03 --> login :: 9177491068cbb45798bec4c3a583bb32 :: 9177491068cbb45798bec4c3a583bb32
ERROR - 2014-09-03 18:05:03 --> login :: 9177491068cbb45798bec4c3a583bb32 :: 9177491068cbb45798bec4c3a583bb32 :: Checkout widget
ERROR - 2014-09-03 18:05:03 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:09:09 --> introduction :: 328fb0755f2112bd4f644a6699458d6e introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 18:09:09 --> introduction :: 328fb0755f2112bd4f644a6699458d6e :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 18:09:09 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:09:09 --> introduction :: 328fb0755f2112bd4f644a6699458d6e :: Partner URL http://www.travelpack.com/booking/bkg-show-basket.php
ERROR - 2014-09-03 18:11:09 --> login :: 606845d0ba0debc683071dafc308e823 :: 606845d0ba0debc683071dafc308e823
ERROR - 2014-09-03 18:11:09 --> login :: 606845d0ba0debc683071dafc308e823 :: 606845d0ba0debc683071dafc308e823 :: Checkout widget
ERROR - 2014-09-03 18:11:09 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:22:30 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 18:23:54 --> customer_eligibility_response :: c467a611b75c3468bccd56701b87ded1 :: c467a611b75c3468bccd56701b87ded1
ERROR - 2014-09-03 18:24:23 --> customer_eligibility_response :: c467a611b75c3468bccd56701b87ded1 :: c467a611b75c3468bccd56701b87ded1
ERROR - 2014-09-03 18:24:35 --> customer_eligibility_response :: c467a611b75c3468bccd56701b87ded1 :: c467a611b75c3468bccd56701b87ded1
ERROR - 2014-09-03 18:25:50 --> introduction :: 18f1d12d9ff7bde2b0fdcb84e651eeb3 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/flights/flt-show-availability.php
ERROR - 2014-09-03 18:25:50 --> introduction :: 18f1d12d9ff7bde2b0fdcb84e651eeb3 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 18:25:50 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:25:50 --> introduction :: 18f1d12d9ff7bde2b0fdcb84e651eeb3 :: Partner URL http://www.travelpack.com/flights/flt-show-availability.php
ERROR - 2014-09-03 18:32:02 --> login :: 67e3e800f452ec928fd90dad9197e1b9 :: 67e3e800f452ec928fd90dad9197e1b9
ERROR - 2014-09-03 18:32:02 --> login :: 67e3e800f452ec928fd90dad9197e1b9 :: 67e3e800f452ec928fd90dad9197e1b9 :: Checkout widget
ERROR - 2014-09-03 18:32:02 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 18:37:17 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 18:39:26 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 18:46:24 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 18:47:02 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 18:47:43 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 18:49:12 --> customer_eligibility_response :: fab543300c82c360441600cc45528148 :: fab543300c82c360441600cc45528148
ERROR - 2014-09-03 18:49:35 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 18:49:55 --> customer_eligibility_response :: fab543300c82c360441600cc45528148 :: fab543300c82c360441600cc45528148
ERROR - 2014-09-03 18:50:03 --> customer_eligibility_response :: fab543300c82c360441600cc45528148 :: fab543300c82c360441600cc45528148
ERROR - 2014-09-03 19:03:42 --> login :: 4af468c7794253e2a7f2d83e16e4c1a7 :: 4af468c7794253e2a7f2d83e16e4c1a7
ERROR - 2014-09-03 19:03:42 --> login :: 4af468c7794253e2a7f2d83e16e4c1a7 :: 4af468c7794253e2a7f2d83e16e4c1a7 :: Checkout widget
ERROR - 2014-09-03 19:03:42 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:06:01 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 19:07:20 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 19:09:22 --> login :: 88396869cec9935fe34b712b091fe155 :: 88396869cec9935fe34b712b091fe155
ERROR - 2014-09-03 19:09:22 --> login :: 88396869cec9935fe34b712b091fe155 :: 88396869cec9935fe34b712b091fe155 :: Checkout widget
ERROR - 2014-09-03 19:09:22 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:10:32 --> customer_eligibility_response :: 6c660f392919cb9354ef6bd298de9616 :: 6c660f392919cb9354ef6bd298de9616
ERROR - 2014-09-03 19:10:34 --> CURL :: options :: {"key":"92ZXJKzrFNcJdNZy0chAoQ","async":false,"template_name":"1-hd-decision-acceptance","template_content":[[]],"message":{"from_email":"donotreply@travelfund.co.uk","to":[{"email":"hannahfisher1@live.co.uk","name":"hannah"}],"merge":true,"merge_vars":[{"rcpt":"hannahfisher1@live.co.uk","vars":[{"name":"base_url","content":"https:\/\/www.travelfund.co.uk\/"},{"name":"name","content":"hannah"},{"name":"apply_now","content":"https:\/\/www.travelfund.co.uk\/"}]}],"tags":[{"tags":"1-hd-decision-acceptance"}],"track_opens":false,"track_clicks":false}}
ERROR - 2014-09-03 19:10:34 --> CURL ::  Curl info https://mandrillapp.com/api/1.0/messages/send-template.php
ERROR - 2014-09-03 19:11:12 --> introduction :: b30f009a123e94fe9a2f56e84c93f29e introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:12 --> introduction :: b30f009a123e94fe9a2f56e84c93f29e :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:11:12 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:11:12 --> introduction :: b30f009a123e94fe9a2f56e84c93f29e :: Partner URL https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:40 --> introduction :: b8577430996ac1e2955ea4639ab649f9 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:40 --> introduction :: b8577430996ac1e2955ea4639ab649f9 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:11:40 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:11:40 --> introduction :: b8577430996ac1e2955ea4639ab649f9 :: Partner URL https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:40 --> introduction :: e4a988974c1a337b2acc5a7c508962a1 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:40 --> introduction :: e4a988974c1a337b2acc5a7c508962a1 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:11:40 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:11:40 --> introduction :: e4a988974c1a337b2acc5a7c508962a1 :: Partner URL https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:59 --> introduction :: b37de95d58cecc456306977957b55185 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:59 --> introduction :: b37de95d58cecc456306977957b55185 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:11:59 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:11:59 --> introduction :: b37de95d58cecc456306977957b55185 :: Partner URL https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:59 --> introduction :: 273cc38a0576792df38619be22ace0bd introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:11:59 --> introduction :: 273cc38a0576792df38619be22ace0bd :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:11:59 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:11:59 --> introduction :: 273cc38a0576792df38619be22ace0bd :: Partner URL https://www.travelfund.co.uk/eligibilityCheckYes
ERROR - 2014-09-03 19:14:18 --> introduction :: d275a774026f1477510cef856b3d0ce1 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 19:14:18 --> introduction :: d275a774026f1477510cef856b3d0ce1 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:14:18 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:14:18 --> introduction :: d275a774026f1477510cef856b3d0ce1 :: Partner URL https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 19:27:08 --> login :: 330fbce221ba51f78f1493faca39f6e0 :: 330fbce221ba51f78f1493faca39f6e0
ERROR - 2014-09-03 19:27:08 --> login :: 330fbce221ba51f78f1493faca39f6e0 :: 330fbce221ba51f78f1493faca39f6e0 :: Checkout widget
ERROR - 2014-09-03 19:27:08 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:33:33 --> login :: 14684cc35e31c8c388f35141708169f0 :: 14684cc35e31c8c388f35141708169f0
ERROR - 2014-09-03 19:33:33 --> login :: 14684cc35e31c8c388f35141708169f0 :: 14684cc35e31c8c388f35141708169f0 :: Checkout widget
ERROR - 2014-09-03 19:33:33 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:42:05 --> login :: 542282679447ef21ec925c1415553b23 :: 542282679447ef21ec925c1415553b23
ERROR - 2014-09-03 19:42:05 --> login :: 542282679447ef21ec925c1415553b23 :: 542282679447ef21ec925c1415553b23 :: Checkout widget
ERROR - 2014-09-03 19:42:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:45:05 --> login :: 15ef23d1ba8c8d335b35c9ceeb2ea204 :: 15ef23d1ba8c8d335b35c9ceeb2ea204
ERROR - 2014-09-03 19:45:05 --> login :: 15ef23d1ba8c8d335b35c9ceeb2ea204 :: 15ef23d1ba8c8d335b35c9ceeb2ea204 :: Checkout widget
ERROR - 2014-09-03 19:45:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:50:09 --> login :: 0c245bbe1cba30c82b823585871f2a41 :: 0c245bbe1cba30c82b823585871f2a41
ERROR - 2014-09-03 19:50:09 --> login :: 0c245bbe1cba30c82b823585871f2a41 :: 0c245bbe1cba30c82b823585871f2a41 :: Checkout widget
ERROR - 2014-09-03 19:50:09 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 19:57:27 --> introduction :: cf8b418f0708ca2f5aa9e64038099824 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 19:57:27 --> introduction :: cf8b418f0708ca2f5aa9e64038099824 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 19:57:27 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 19:57:27 --> introduction :: cf8b418f0708ca2f5aa9e64038099824 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 19:58:24 --> login :: 05349c9ca5432f5bdbe707f6c3ea9cf9 :: 05349c9ca5432f5bdbe707f6c3ea9cf9
ERROR - 2014-09-03 19:58:24 --> login :: 05349c9ca5432f5bdbe707f6c3ea9cf9 :: 05349c9ca5432f5bdbe707f6c3ea9cf9 :: Checkout widget
ERROR - 2014-09-03 19:58:24 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:00:32 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:01:18 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:36:14 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:41:43 --> login :: a62bd5eee4705209a752475263ad5c4c :: a62bd5eee4705209a752475263ad5c4c
ERROR - 2014-09-03 20:41:43 --> login :: a62bd5eee4705209a752475263ad5c4c :: a62bd5eee4705209a752475263ad5c4c :: Checkout widget
ERROR - 2014-09-03 20:41:43 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:47:47 --> login :: a73349390188be62ede1bf10db6d3b2d :: a73349390188be62ede1bf10db6d3b2d
ERROR - 2014-09-03 20:47:47 --> login :: a73349390188be62ede1bf10db6d3b2d :: a73349390188be62ede1bf10db6d3b2d :: Checkout widget
ERROR - 2014-09-03 20:47:47 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:52:05 --> login :: 17229dcb2e116493fc12cfceb2d7ce47 :: 17229dcb2e116493fc12cfceb2d7ce47
ERROR - 2014-09-03 20:52:05 --> login :: 17229dcb2e116493fc12cfceb2d7ce47 :: 17229dcb2e116493fc12cfceb2d7ce47 :: Checkout widget
ERROR - 2014-09-03 20:52:05 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:53:45 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:53:45 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:54:09 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 20:54:45 --> introduction :: 4c742c698c6ea9be1d6dd4d39b951a2b introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 20:54:45 --> introduction :: 4c742c698c6ea9be1d6dd4d39b951a2b :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 20:54:45 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 20:54:45 --> introduction :: 4c742c698c6ea9be1d6dd4d39b951a2b :: Partner URL https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 20:54:46 --> introduction :: 5149bc6dd25b6f7c481bcc7e6546bc30 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 20:54:46 --> introduction :: 5149bc6dd25b6f7c481bcc7e6546bc30 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 20:54:46 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:54:46 --> introduction :: 5149bc6dd25b6f7c481bcc7e6546bc30 :: Partner URL http://www.travelpack.com/holidays/hol-inputs.php
ERROR - 2014-09-03 20:55:00 --> how_it_works :: 5149bc6dd25b6f7c481bcc7e6546bc30
ERROR - 2014-09-03 20:55:01 --> introduction :: 128a41857aa97b115c8b3b49e6c1fb8d introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 20:55:01 --> introduction :: 128a41857aa97b115c8b3b49e6c1fb8d :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 20:55:01 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 20:55:01 --> introduction :: 128a41857aa97b115c8b3b49e6c1fb8d :: Partner URL https://www.travelfund.co.uk/how/
ERROR - 2014-09-03 20:55:12 --> how_it_works :: 128a41857aa97b115c8b3b49e6c1fb8d
ERROR - 2014-09-03 20:55:17 --> customer_eligiblity_details :: 128a41857aa97b115c8b3b49e6c1fb8d
ERROR - 2014-09-03 20:56:04 --> introduction :: dcee8fa8563ad927d53f85802845d11f introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 20:56:04 --> introduction :: dcee8fa8563ad927d53f85802845d11f :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 20:56:04 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 20:56:04 --> introduction :: dcee8fa8563ad927d53f85802845d11f :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 20:56:09 --> customer_eligibility_response :: 128a41857aa97b115c8b3b49e6c1fb8d :: 128a41857aa97b115c8b3b49e6c1fb8d
ERROR - 2014-09-03 20:56:45 --> login :: baf83608329be7962cb10c1d1b99388f :: baf83608329be7962cb10c1d1b99388f
ERROR - 2014-09-03 20:56:45 --> login :: baf83608329be7962cb10c1d1b99388f :: baf83608329be7962cb10c1d1b99388f :: Checkout widget
ERROR - 2014-09-03 20:56:45 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 20:56:53 --> login :: 3a2b4069e7973a75b56bcad9d3fb1715 :: 3a2b4069e7973a75b56bcad9d3fb1715
ERROR - 2014-09-03 20:56:53 --> login :: 3a2b4069e7973a75b56bcad9d3fb1715 :: 3a2b4069e7973a75b56bcad9d3fb1715 :: Checkout widget
ERROR - 2014-09-03 20:56:53 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 21:03:03 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 21:03:03 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 21:14:26 --> login :: 8396b9b02e745d7927f66dfe9585577c :: 8396b9b02e745d7927f66dfe9585577c
ERROR - 2014-09-03 21:14:26 --> login :: 8396b9b02e745d7927f66dfe9585577c :: 8396b9b02e745d7927f66dfe9585577c :: Checkout widget
ERROR - 2014-09-03 21:14:26 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 21:28:45 --> login :: 8057847eb6668add0b001d36f75a56b6 :: 8057847eb6668add0b001d36f75a56b6
ERROR - 2014-09-03 21:28:45 --> login :: 8057847eb6668add0b001d36f75a56b6 :: 8057847eb6668add0b001d36f75a56b6 :: Checkout widget
ERROR - 2014-09-03 21:28:45 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 21:29:57 --> login :: c401853dd535b683b2fe85448d01e109 :: c401853dd535b683b2fe85448d01e109
ERROR - 2014-09-03 21:29:57 --> login :: c401853dd535b683b2fe85448d01e109 :: c401853dd535b683b2fe85448d01e109 :: Checkout widget
ERROR - 2014-09-03 21:29:57 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 21:33:57 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 22:00:34 --> login :: 1dc251ca3bc153f3b4269069e86f6c93 :: 1dc251ca3bc153f3b4269069e86f6c93
ERROR - 2014-09-03 22:00:34 --> login :: 1dc251ca3bc153f3b4269069e86f6c93 :: 1dc251ca3bc153f3b4269069e86f6c93 :: Checkout widget
ERROR - 2014-09-03 22:00:34 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 22:04:54 --> login :: 529d2e1339f06b91ee3d94b05d0827c7 :: 529d2e1339f06b91ee3d94b05d0827c7
ERROR - 2014-09-03 22:04:54 --> login :: 529d2e1339f06b91ee3d94b05d0827c7 :: 529d2e1339f06b91ee3d94b05d0827c7 :: Checkout widget
ERROR - 2014-09-03 22:04:54 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 22:07:25 --> introduction :: 73f6a5568c96e68fdae6d90660ca686f introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:07:25 --> introduction :: 73f6a5568c96e68fdae6d90660ca686f :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 22:07:25 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 22:07:25 --> introduction :: 73f6a5568c96e68fdae6d90660ca686f :: Partner URL https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:07:39 --> how_it_works :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:07:42 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:07:42 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:07:44 --> CURL :: options :: No option
ERROR - 2014-09-03 22:07:44 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 22:07:44 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:07:44 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:07:44 --> personal_details :: 73f6a5568c96e68fdae6d90660ca686f :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 22:09:22 --> login :: 73f6a5568c96e68fdae6d90660ca686f :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:09:44 --> authenticate :: 73f6a5568c96e68fdae6d90660ca686f :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:09:44 --> authenticate :: 73f6a5568c96e68fdae6d90660ca686f Customer authenticated Customer Data Array
(
    [0] => stdClass Object
        (
            [id] => 234
            [title] => Mr
            [first_name] => Sundeep
            [last_name] => Singh
            [birth_date] => 16-03-1992
            [email] => Sundeep@hotmail.co.uk
            [is_email_validated] => 0
            [email_validation_code] => 
            [password] => 4ff3df2a2d64a1d2d097a317ab3e151b
            [password_reset_code] => 
            [password_reset_expiry_datetime] => 0000-00-00 00:00:00
            [password_reset_attempt] => 0
            [created_datetime] => 2014-09-02 00:09:55
            [modified_datetime] => 2014-09-02 00:09:55
        )

)

ERROR - 2014-09-03 22:09:44 --> authenticate :: 73f6a5568c96e68fdae6d90660ca686f :: Application Array
(
    [0] => stdClass Object
        (
            [id] => 255
            [len_app_id] => 
            [account_number] => 
            [cust_id] => 234
            [partner_id] => 2
            [lender_id] => 1
            [app_status] => NONE
            [tf_status] => VCDEC
            [tf_status_datetime] => 0000-00-00 00:00:00
            [mobile_phone] => 07773509298
            [departure_date] => 30-09-2014
            [accept_terms] => No
            [sp_terms] => yes
            [created_datetime] => 2014-09-02 00:09:55
            [modified_datetime] => 2014-09-02 00:09:55
            [send] => 0
            [sent_datetime] => 0000-00-00 00:00:00
        )

)

ERROR - 2014-09-03 22:09:44 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:09:44 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:09:44 --> CURL :: options :: No option
ERROR - 2014-09-03 22:09:44 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 22:09:44 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:09:44 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:09:44 --> authenticate :: 73f6a5568c96e68fdae6d90660ca686f :: Redirect to address
ERROR - 2014-09-03 22:09:44 --> address_details :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:10:07 --> get_address_details :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:10:17 --> insert_address_details :: 73f6a5568c96e68fdae6d90660ca686f
ERROR - 2014-09-03 22:10:17 --> false
ERROR - 2014-09-03 22:10:17 --> insert_address_details :: 73f6a5568c96e68fdae6d90660ca686f :: Insert Address Array
(
    [house_number] => 38
    [street] => Somerville Road
    [post_code] => Le3 2eu
    [city] => Leicester
    [county] => Leicestershire
    [howmany_add] => 1
    [app_id] => 255
    [created_datetime] => 2014-09-03 22:10:17
    [modified_datetime] => 2014-09-03 22:10:17
)

ERROR - 2014-09-03 22:10:17 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:10:17 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:10:20 --> CURL :: options :: title=Mr&lastName=Singh&firstName=Sundeep&dateOfBirth=1992-03-16&email=Sundeep%40hotmail.co.uk&applicationId=&mobilePhone=07773509298&statusCode=NONE&agreeTerms=true&agreeCreditTerms=No&productSpecificDetails=departureDate%5E2014-09-30&addresses%5B0%5D.houseNumber=38&addresses%5B0%5D.streetName=Somerville+Road&addresses%5B0%5D.townCity=Leicester&addresses%5B0%5D.postcode=Le3+2eu&promoCode=TVR001
ERROR - 2014-09-03 22:10:20 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Apply/TVR001
ERROR - 2014-09-03 22:10:20 -->  ROW ResponseArray
(
    [applicationId] => 1001568093
    [statusCode] => VCREQ
    [statusDescription] => Mobile verification code requested.
    [productOffer] => 
)

ERROR - 2014-09-03 22:10:20 --> Decoded ResponseArray
(
    [applicationId] => 1001568093
    [statusCode] => VCREQ
    [statusDescription] => Mobile verification code requested.
    [productOffer] => 
)

ERROR - 2014-09-03 22:10:20 --> insert_address_details :: 73f6a5568c96e68fdae6d90660ca686f :: APS Response Array
(
    [len_app_id] => 1001568093
    [app_status] => VCREQ
)

ERROR - 2014-09-03 22:10:20 --> insert_address_details :: 73f6a5568c96e68fdae6d90660ca686f :: Update Application Array
(
    [col_val] => Array
        (
            [len_app_id] => 1001568093
            [app_status] => VCREQ
        )

    [where] => Array
        (
            [id] => 255
        )

)

ERROR - 2014-09-03 22:14:48 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 22:14:48 --> send_verification_code :: 06badfdc9f57c91e8c1965533e987c85
ERROR - 2014-09-03 22:14:48 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:14:48 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:14:49 --> CURL :: options :: applicationId=1001568093&resendVerificationCode=true
ERROR - 2014-09-03 22:14:49 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Apply/TVR001
ERROR - 2014-09-03 22:14:49 --> send_verification_code :: 06badfdc9f57c91e8c1965533e987c85 :: APS Response 1
ERROR - 2014-09-03 22:14:51 --> send_verification_code :: 06badfdc9f57c91e8c1965533e987c85
ERROR - 2014-09-03 22:14:51 -->  OTA URL :: https://www.travelfund.co.uk/how/?gclid=CKfB9-P5xcACFSITwwodBGEAgw
ERROR - 2014-09-03 22:14:51 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:14:51 --> CURL :: options :: applicationId=1001568093&resendVerificationCode=true
ERROR - 2014-09-03 22:14:51 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Apply/TVR001
ERROR - 2014-09-03 22:14:51 --> send_verification_code :: 06badfdc9f57c91e8c1965533e987c85 :: APS Response 1
ERROR - 2014-09-03 22:15:04 --> introduction :: e61b19a7328d7c8511e3ac27e482b2cc introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/how/?gclid=CjwKEAjw-JqgBRCAyqjoic27nlQSJABBTpFEDbe4E7y-DCZEK0bzHsp4fO6yxohwMezujZlG0oSuORoCcCjw_wcB
ERROR - 2014-09-03 22:15:04 --> introduction :: e61b19a7328d7c8511e3ac27e482b2cc :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 22:15:04 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 22:15:04 --> introduction :: e61b19a7328d7c8511e3ac27e482b2cc :: Partner URL https://www.travelfund.co.uk/how/?gclid=CjwKEAjw-JqgBRCAyqjoic27nlQSJABBTpFEDbe4E7y-DCZEK0bzHsp4fO6yxohwMezujZlG0oSuORoCcCjw_wcB
ERROR - 2014-09-03 22:15:47 --> how_it_works :: e61b19a7328d7c8511e3ac27e482b2cc
ERROR - 2014-09-03 22:15:53 --> customer_eligiblity_details :: e61b19a7328d7c8511e3ac27e482b2cc
ERROR - 2014-09-03 22:18:33 --> customer_eligibility_response :: e61b19a7328d7c8511e3ac27e482b2cc :: e61b19a7328d7c8511e3ac27e482b2cc
ERROR - 2014-09-03 22:20:30 --> introduction :: 5b01ea9da4ef6519e75a583202ed2e32 introduction_url :: /application/introduction/Travel-Fund?partner_url=https://www.travelfund.co.uk/
ERROR - 2014-09-03 22:20:30 --> introduction :: 5b01ea9da4ef6519e75a583202ed2e32 :: Array
(
    [code] => Travel-Fund
)

ERROR - 2014-09-03 22:20:30 --> check_eligibility :: stdClass Object
(
    [id] => 2
    [name] => Travelfund
    [status] => active
    [code] => Travel-Fund
    [phone] => 0844 9876 5432
    [email] => support@travelfund.co.uk
    [url] => 
    [created_datetime] => 2014-03-13 00:00:00
    [modified_datetime] => 2014-03-13 00:00:00
)

ERROR - 2014-09-03 22:20:30 --> introduction :: 5b01ea9da4ef6519e75a583202ed2e32 :: Partner URL https://www.travelfund.co.uk/
ERROR - 2014-09-03 22:20:41 --> login :: 48c843cec481ebb24d2577e9735acf5e :: 48c843cec481ebb24d2577e9735acf5e
ERROR - 2014-09-03 22:20:41 --> login :: 48c843cec481ebb24d2577e9735acf5e :: 48c843cec481ebb24d2577e9735acf5e :: Checkout widget
ERROR - 2014-09-03 22:20:41 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 22:21:02 --> how_it_works :: 5b01ea9da4ef6519e75a583202ed2e32
ERROR - 2014-09-03 22:23:34 -->  OTA URL :: https://www.travelfund.co.uk/
ERROR - 2014-09-03 22:23:34 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 22:23:34 --> CURL :: options :: No option
ERROR - 2014-09-03 22:23:34 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 22:23:34 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:23:34 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 22:23:34 --> personal_details :: 5b01ea9da4ef6519e75a583202ed2e32 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

ERROR - 2014-09-03 22:25:48 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 22:32:18 --> 404 Page Not Found --> favicon.ico
ERROR - 2014-09-03 23:08:08 --> login :: 31430f9ea56af43643efad0383d83847 :: 31430f9ea56af43643efad0383d83847
ERROR - 2014-09-03 23:08:08 --> login :: 31430f9ea56af43643efad0383d83847 :: 31430f9ea56af43643efad0383d83847 :: Checkout widget
ERROR - 2014-09-03 23:08:08 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 23:31:19 --> login :: a7534def636d51865490401fde647b6a :: a7534def636d51865490401fde647b6a
ERROR - 2014-09-03 23:31:19 --> login :: a7534def636d51865490401fde647b6a :: a7534def636d51865490401fde647b6a :: Checkout widget
ERROR - 2014-09-03 23:31:19 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 23:40:22 --> login :: c525849214f2fd57854d09b9319d9ce1 :: c525849214f2fd57854d09b9319d9ce1
ERROR - 2014-09-03 23:40:22 --> login :: c525849214f2fd57854d09b9319d9ce1 :: c525849214f2fd57854d09b9319d9ce1 :: Checkout widget
ERROR - 2014-09-03 23:40:22 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 23:41:12 --> 404 Page Not Found --> robots.txt
ERROR - 2014-09-03 23:55:32 --> introduction :: b8364d7dac00cbece01112aa5246b390 introduction_url :: /application/introduction/Travel-Pack?partner_url=http://www.travelpack.com/
ERROR - 2014-09-03 23:55:32 --> introduction :: b8364d7dac00cbece01112aa5246b390 :: Array
(
    [code] => Travel-Pack
)

ERROR - 2014-09-03 23:55:32 --> check_eligibility :: stdClass Object
(
    [id] => 1
    [name] => Travelpack
    [status] => active
    [code] => Travel-Pack
    [phone] => 111111111111
    [email] => support@travelpack.co.uk
    [url] => 
    [created_datetime] => 2014-05-09 00:00:00
    [modified_datetime] => 2014-05-09 00:00:00
)

ERROR - 2014-09-03 23:55:32 --> introduction :: b8364d7dac00cbece01112aa5246b390 :: Partner URL http://www.travelpack.com/
ERROR - 2014-09-03 23:55:46 --> how_it_works :: b8364d7dac00cbece01112aa5246b390
ERROR - 2014-09-03 23:55:55 -->  OTA URL :: http://www.travelpack.com/
ERROR - 2014-09-03 23:55:55 -->  APS URL :: https://live.secure.mycashplus.co.uk/Onlineapi/
ERROR - 2014-09-03 23:55:57 --> CURL :: options :: No option
ERROR - 2014-09-03 23:55:57 --> CURL ::  Curl info https://live.secure.mycashplus.co.uk/Onlineapi/Api/Product/Summary?promocode=TVR001
ERROR - 2014-09-03 23:55:57 -->  ROW ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 23:55:57 --> Decoded ResponseArray
(
    [promoCode] => TVR001
    [availableFunds] => 1
    [representativeAPR] => 0.249
    [purchaseRate] => 0.1259
    [assumedLimit] => 2000
)

ERROR - 2014-09-03 23:55:57 --> personal_details :: b8364d7dac00cbece01112aa5246b390 :: fund_availability Array
(
    [avail_fund] => 1
    [rep_apr] => 0.249
    [purchase_rate] => 0.1259
    [assumed_limit] => 2000
)

