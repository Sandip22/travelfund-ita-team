<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lender
{

    var $lender;

    /**
     * Load specific lender.
     */
    public function load($name)
    {
        switch($name)
        {
            case 'APS' :
                $this->lender = new APS();
        }
    }

    /**
     * This function call various method for particular lender.
     * @param Array
     */
    function call($aMethod)
    {
        $method = $aMethod['name'];
        if(isset($aMethod['arg'])){
            return $this->lender->$method($aMethod['arg']);
        }else{
            return $this->lender->$method();
        }
    }
    
}
