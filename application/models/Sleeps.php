<?php

class Sleeps extends CI_Model
{

    var $data = array(
        array(
            'id'            => '1',
            'name'          => 'Times Square Suites Hotel',
            'pic'           => 'sleep_times.jpg',
            'link'          => '#',
            'description'   => 'Times Square Suites is an apartment hotel located at the corner of Robson and Denman
                Streets in downtown Vancouver\'s West End - just moments from Stanley Park.... '),
        array(
            'id'            => '2',
            'name'          => 'L\'Hermitage Hotel',
            'pic'           => 'sleep_hermitage.jpg',
            'link'          => '#',
            'description'   => 'Celebrated as one of downtown Vancouver’s most popular boutique hotels, L’Hermitage
                Hotel is currently #1 in Vancouver on TripAdvisor, and was awarded #1 hotel in Canada
                and one of the top 25 hotels in the .... '),
        array(
            'id'            => '3',
            'name'          => 'Fairmont Pacific Rim Hotel',
            'pic'           => 'sleep_pacificrim.jpg',
            'link'          => '#',
            'description'   => 'Fairmont Pacific Rim, luxury, naturally inspired to create a sophisticated and
                contemporary atmosphere that features the best of the Pacific Rim in its plan, décor,
                and culinary offerings....')
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single accomodation
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the accomodation
    public function all() {
        return $this->data;
    }

    // retrieve the first accomodation
    public function first() {
        return $this->data[0];
    }

    // retrieve the last accomodation
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
