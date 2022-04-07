<!--
Work log for Venue.php
Created on 4/05/22
4/05/22 set up Venue class
-->

<?php

  class Venue {

    //name (string)
    private string $venue_name;

    //games (Array of Team objects in this division)
    private $venue_games;


    public function __construct (
      string $venue_name
      )
      {
        $this->venue_name = $venue_name;
        $this->venue_games = array ();
      }

  }

?>
