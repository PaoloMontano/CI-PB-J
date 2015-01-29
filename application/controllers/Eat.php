<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Eat extends MY_Controller
{

    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->render();
    }
        
}