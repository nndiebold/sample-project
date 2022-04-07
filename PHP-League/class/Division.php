<!--
Work log for Division.php
Created on 4/05/22
4/05/22 set up Division class
-->

<?php

  Class Division {

    //name (String)
    private string $division_name;


    //teams (arrays of Team objects in this division)
    private $division_teams;

    public function __construct (
      string $division_name,
      $division_teams)
      {
        $this->division_name = $division_name;
        $this->division_teams = $division_teams;
      }


  }

?>
