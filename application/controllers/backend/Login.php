<?php
/*
*@Author: hch
*@ Date: 2017年10月10日
*@Explain: 
**/

class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function index()
    {
        echo 'login';
    }
}