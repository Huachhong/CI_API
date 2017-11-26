<?php
/*
*@Author: hch
*@ Date: 2017年10月10日
*@Explain: 
**/

class Login extends REST_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function index_get()
    {
        
    }
    
    public function logout_get()
    {
        echo 'logout';
    }
    
}