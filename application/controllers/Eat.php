<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Eat extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->all();
        
        $this->filterDescription();
        
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
    
    public function sortHValue()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->getHighest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortHRating()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->getHighest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
        public function sortLValue()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->getLowest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortLRating()
    {
        $this->data['pagetitle'] = 'WIP - Eat';
        $this->data['pagebody'] = 'eat';
        $this->data['eats'] = $this->Eats->getLowest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    // Strip tags and limit characters to be 200 for description.
    public function filterDescription()
    {
        foreach($this->data['eats'] as $eat)
        {
            $eat->desc = strip_tags($eat->desc);
            
            if (strlen($eat->desc) > 200)
                $eat->desc = substr ($eat->desc, 0, 199) . "...";
        }
        
    }

}