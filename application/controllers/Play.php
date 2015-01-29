<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends MY_Controller
{

    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->render();
    }
        
}