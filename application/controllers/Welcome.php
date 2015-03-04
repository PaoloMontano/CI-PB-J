<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Application {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$this->data['pagebody'] = 'homepage';
		
        // Grab top sleeps from model
        {
            $source = $this->sleeps->topThree();
            $sleeps = array();
            foreach ($source as $record) {
                $sleeps[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link']);
            }

            $this->data['sleeps'] = $sleeps;
            $this->data['top-sleep'] = $sleeps[0]['pic'];
            $this->data['top-sleep-link'] = $sleeps[0]['link'];
            $this->data = array_merge($this->data, $source);
        }
        // Grab to plays from model
        {
            $source = $this->plays->topThree();
            $eats = array();
            foreach ($source as $record) {
                $plays[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link']);
            }

            $this->data['plays'] = $plays;
            $this->data['top-play'] = $plays[0]['pic'];
            $this->data['top-play-link'] = $plays[0]['link'];
            $this->data = array_merge($this->data, $source);
        }
        // Grab top eats from model
        {
            $source = $this->eats->topThree();
            $eats = array();
            foreach ($source as $record) {
                $eats[] = array('name' => $record['name'], 'pic' => $record['pic'], 'link' => $record['link']);
            }

            $this->data['eats'] = $eats;
            $this->data['top-eat'] = $eats[0]['pic'];
            $this->data['top-eat-link'] = $eats[0]['link'];
            $this->data = array_merge($this->data, $source);
        }
		
		$this->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */