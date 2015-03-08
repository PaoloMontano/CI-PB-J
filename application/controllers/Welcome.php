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

        $this->data['top-eat'] = $this->Eats->getHighest("rating", 1);
        $this->data['eats'] = $this->Eats->getHighest("rating", 3);

        $this->data['top-play'] = $this->Plays->getHighest("rating", 1);
        $this->data['plays'] = $this->Plays->getHighest("rating", 3);

        $this->data['top-sleep'] = $this->Sleeps->getHighest("rating", 1);
        $this->data['sleeps'] = $this->Sleeps->getHighest("rating", 3);


            $this->render();
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */