<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sleep extends MY_Controller
{

    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->render();
    }
        
}