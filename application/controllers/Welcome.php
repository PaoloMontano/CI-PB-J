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

        $this->data['top-eat'] = $this->eats->getHighestRating();
        $this->data['eats'] = $this->eats->getHighestRatings(3);
        
        $this->data['top-play'] = $this->plays->getHighestRating();
        $this->data['plays'] = $this->plays->getHighestRatings(3);
        
        $this->data['top-sleep'] = $this->sleeps->getHighestRating();
        $this->data['sleeps'] = $this->sleeps->getHighestRatings(3);
        

            $this->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */