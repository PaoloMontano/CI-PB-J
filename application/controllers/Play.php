<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Play extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        
        // Grab data from model
        {
            $source = $this->plays->all();
            $plays = array();
            foreach ($source as $record) {
                $plays[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link'], 'description' => $record['description']);
            }

            // Done for testing purposes of population, remove when populating with real data.
            $plays = array_merge($plays, $plays);
            $plays = array_merge($plays, $plays);

            $this->data['plays'] = $plays;
            $this->data = array_merge($this->data, $source);
        }
        
        $this->render();
    }

}