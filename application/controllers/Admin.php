<?php

class Admin extends Application {

    function __construct()
    {
	parent::__construct();
        $this->load->helper('formfields');
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------
    function index()
    {
        $this->data['title'] = "Manage Attractions";
        //$this->data['quotes'] = $this->quotes->all();
        
	$this->data['pagebody'] = 'admin';
        $this->render();
    }
    
}