<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Sleep extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        
        // Grab data from model
        {
            $source = $this->sleeps->all();
            $sleeps = array();
            foreach ($source as $record) {
                $sleeps[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link'], 'description' => $record['description']);
            }

            // Done for testing purposed of population, remove when populating with real data.
            $sleeps = array_merge($sleeps, $sleeps);
            $sleeps = array_merge($sleeps, $sleeps);

            $this->data['sleeps'] = $sleeps;
            $this->data = array_merge($this->data, $source);
        }
        
        $this->render();
    }

}