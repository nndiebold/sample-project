<!--
Work log for Team.php
Created on 4/05/22
4/05/22
- Set up Team class
- Started working on name, games, and stats. However, not sure
if I am doing this correctly....
-->

<?php

  Class Team {

    //name (String)
    private string $team_name;

    //games (Array of game objects for this team)
    private $team_games;

    //Stats object
    private Stats $stats;

    public function __construct (
      string $team_name,
      $team_games,
      //Stats is from Stats class
      Stats $stats)
      {
        $this->team_name = $team_name;
        $this->team_games = $team_games;
        $this->stats = $stats;
      }

  }

?>
