<!--
Work log for Team.php
Created on 4/05/22
4/05/22
- Set up Team class
- Started working on name, games, and stats. However, not sure
if I am doing this correctly....
-->

<?php

class Team {

    //name (String)
    private string $team_name;

    //games (Array of game objects for this team)
    private $team_games;

    //Stats object
    private Stats $stats;

    //division object
    private Division $division;

    public function __construct (
      string $team_name,
      //Stats is from Stats class
      Stats $stats,
      //from Division class
      Division $division)
      {
        $this->team_name = $team_name;
        $this->team_games = array();
        $this->stats = $stats;
        $this->division = $division;
      }

    public function AddGame (Game $games)
    {
      $this->team_games[] = $games;
    }

    public function GetName ()
    {
      return $this->team_name;
    }

  }

?>
