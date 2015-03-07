<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Eat extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->all();
        
        $this->render();
    }

}