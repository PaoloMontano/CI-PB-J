<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Sleep extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->all();
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function view($id)
    {
        $attraction = $this->Sleeps->get($id);
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
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->getHighest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortHRating()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->getHighest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
        public function sortLValue()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->getLowest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortLRating()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->getLowest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    // Strip tags and limit characters to be 200 for description.
    public function filterDescription()
    {
        foreach($this->data['sleeps'] as $sleep)
        {
            $sleep->desc = strip_tags($sleep->desc);
            
            if (strlen($sleep->desc) > 200)
                $sleep->desc = substr ($sleep->desc, 0, 199) . "...";
        }
        
    }


}