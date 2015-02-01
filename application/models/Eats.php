<?php

class Eats extends CI_Model
{

    var $data = array(
        array(
            'id'            => '1',
            'name'          => 'Tuc Craft Kitchen',
            'pic'           => 'eat_tuc.jpeg', 'link'=>'#',
            'description'   => 'Tuc Craft Kitchen is a restaurant and bar in Gastown, Vancouver.
                    Our vision was to create a gathering place that feels like it has always been here.
                    Our food is elegant, rustic, honest... '),
        array(
            'id'            => '2',
            'name'          => 'The Flying Pig',
            'pic'           => 'eat_pig.jpg', 'link'=>'#',
            'description'   => 'I know what you’re thinking. The Flying Pig? You must have lots of pork on the menu,
                    right? Nothing could be further from the truth. To be honest, our menu breakdown has
                    a wide range of items and, yes, a small... '),
        array(
            'id'            => '3',
            'name'          => 'Guu with Garlic',
            'pic'           => 'eat_guu.jpg',
            'link'          =>'#',
            'description'   => 'Guu ​with Garlic is all about “Garlic is Sexy”. Also called “Guu Robson”, this is the
                    second Guu to open. Sexy is not just about the outside, but it’s the fundamental
                    attitude reflecting energy.')
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
