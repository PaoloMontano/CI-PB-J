<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Sleep extends Application
{
    
    public function index()
    {
        $this->data['pagetitle'] = 'WIP - Sleep';
        $this->data['pagebody'] = 'sleep';
        $this->data['sleeps'] = $this->Sleeps->all();
        foreach($this->data['sleeps'] as $sleep)
        {
            $sleep->desc = strip_tags($sleep->desc);
            
            if (strlen($sleep->desc) > 200)
                $sleep->desc = substr ($sleep->desc, 0, 199) . "... ";
        }
        
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

}