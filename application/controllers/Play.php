<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Play extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->data['plays'] = $this->Plays->all();
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function view($id)
    {
        $attraction = $this->Plays->get($id);
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
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->data['plays'] = $this->Plays->getHighest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortHRating()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->data['plays'] = $this->Plays->getHighest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
        public function sortLValue()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->data['plays'] = $this->Plays->getLowest("value", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    public function sortLRating()
    {
        $this->data['pagetitle'] = 'WIP - Play';
        $this->data['pagebody'] = 'play';
        $this->data['plays'] = $this->Plays->getLowest("rating", 0);
        
        $this->filterDescription();
        
        $this->render();
    }
    
    // Strip tags and limit characters to be 200 for description.
    public function filterDescription()
    {
        foreach($this->data['plays'] as $play)
        {
            $play->desc = strip_tags($play->desc);
            
            if (strlen($play->desc) > 200)
                $play->desc = substr ($play->desc, 0, 199) . "...";
        }
        
    }

}