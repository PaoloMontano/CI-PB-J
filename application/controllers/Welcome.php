<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application
{

    function __construct() {
            parent::__construct();
    }

    public function index()
    {
        $this->data['pagebody'] = 'homepage';

        $this->data['top-eat'] = $this->eats->getHighest("rating", 1);
        $this->data['eats'] = $this->eats->getHighest("rating", 3);
        
        $this->data['top-play'] = $this->plays->getHighest("rating", 1);
        $this->data['plays'] = $this->plays->getHighest("rating", 3);
        
        $this->data['top-sleep'] = $this->sleeps->getHighest("rating", 1);
        $this->data['sleeps'] = $this->sleeps->getHighest("rating", 3);
        

            $this->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */