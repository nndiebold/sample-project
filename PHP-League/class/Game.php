<!--
Work log for Game.php
Created on 4/05/22
4/05/22 Started to set up and work on Game class
-->

<?php

  class Game {

    //datetime (datetime object)
    private $datetime;

    //home_team (team object)
    private $home_team;

    //home_score (integer)
    private $home_score;

    //visitor_team (team object)
    private $visitor_team;

    //visitor_score (integer)
    private $visitor_score;

    //venue (venue object)
    private $venue;


    public function __construct(
      //gives the current time
      $datetime = time(),
      $home_team = NULL,
      $home_score = 0,
      $visitor_team = NULL,
      $visitor_score = 0,
      $venue = NULL)
      {
        $this->datetime = $datetime;
        $this->home_team = $home_team;
        $this->home_score = $home_score;
        $this->visitor_team = $visitor_team;
        $this->visitor_score = $visitor_score;
        $this->venue = $venue;
      }





  }


?>
