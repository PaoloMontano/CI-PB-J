<?php

class Plays extends CI_Model
{

    var $data = array(
        array(
            'id' => '1',
            'name' => 'Van Dusen Botanical Gardens',
            'pic' => 'image1.jpg', 'link'=>'#',
            'description' => 'Be inspired by VanDusen Botanical Garden\'s 22 hectares of elegant landscapes with plant
                species representing ecosystems ranging from the Himalayas to the Mediterranean, from
                Louisiana swamps to the Pacific Northwest. ... '
            ),
        array(
            'id' => '2',
            'name' => 'Rio Theatre',
            'pic' => 'image1.jpg', 'link'=>'#',
            'description' => 'The Rio Theatre on Broadway and Commercial, voted #1 in East Vancouver, is a multimedia
                venue for premier independent cinema of first-run feature films and live entertainment... '
            ),
        array(
            'id' => '3',
            'name' => 'Dr. Sun Yat-Sen Classical Chinese Garden',
            'pic' => 'image1.jpg', 'link'=>'#',
            'description' => 'Breathtaking, rain or shine… Step into our door and out of your daily life as your
                heart and mind relax and energy renews. Journey back in time to 15th Century China
                and enjoy this “window to another world”... '
            )
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single restaurant
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the restaurants
    public function all() {
        return $this->data;
    }

    // retrieve the first restaurant
    public function first() {
        return $this->data[0];
    }

    // retrieve the last restaurant
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
