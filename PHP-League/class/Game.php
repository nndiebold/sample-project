<!--
Work log for Game.php
Created on 4/05/22
4/05/22 Started to set up and work on Game class
-->

<?php

  class Game {

    //datetime (datetime object)
    private DateTime $datetime;

    //home_team (team object)
    private Team $home_team;

    //home_score (integer)
    private int $home_score;

    //visitor_team (team object)
    private Team $visitor_team;

    //visitor_score (integer)
    private int $visitor_score;

    //venue (venue object)
    private Venue $venue;


    public function __construct(
      //gives the current time
      DateTime $datetime = NULL,
      //Team comes from Team class
      Team $home_team = NULL,
      int $home_score = 0,
      Team $visitor_team = NULL,
      int $visitor_score = 0,
      //Venue comes from Venue Class
      Venue $venue = NULL)
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
