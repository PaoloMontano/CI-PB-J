<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Eat extends Application
{
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        // Grab data from model
        {
            $source = $this->eats->all();
            $eats = array();
            foreach ($source as $record) {
                $eats[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link'], 'description' => $record['description']);
            }

            // Done for testing purposed of population, remove when populating with real data.
            $eats = array_merge($eats, $eats);
            $eats = array_merge($eats, $eats);

            $this->data['eats'] = $eats;
            $this->data = array_merge($this->data, $source);
        }
        $this->render();
    }

}