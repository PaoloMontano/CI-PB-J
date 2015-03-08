<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Eat extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->all();
        
        // Strip tags and limit characters to be 200 for description.
        foreach($this->data['eats'] as $eat)
        {
            $eat->desc = strip_tags($eat->desc);
            
            if (strlen($eat->desc) > 200)
                $eat->desc = substr ($eat->desc, 0, 199) . "...";
        }
        
        $this->render();
    }
    
    public function view($id)
    {
        $attraction = $this->Eats->get($id);
        $this->data['pagetitle'] = $attraction->title;
        $this->data['pagebody'] = 'view';
        
        $this->data['title'] = $attraction->title;
        $this->data['phoneId'] = $attraction->phoneId;
        $this->data['image'] = $attraction->image;
        $this->data['desc'] = $attraction->desc;
        $this->data['value'] = $attraction->value;
        $this->data['rating'] = $attraction->rating;
        $this->data['link'] = $attraction->link;
        
        $this->render();
    }

}