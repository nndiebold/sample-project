<!--
Work log for Division.php
Created on 4/05/22
4/05/22 set up Division class
-->

<?php

  class Division {

    //name (String)
    private string $division_name;


    //teams (arrays of Team objects in this division)
    private $division_teams;

    public function __construct (
      string $division_name
      )
      {
        $this->division_name = $division_name;
        $this->division_teams = array();
      }

    public function AddTeam (Team $team)
    {
      $this->division_teams[] = $team;    
    }


  }

?>
