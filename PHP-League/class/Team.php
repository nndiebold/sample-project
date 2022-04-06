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
    $team_name = "";


    //games (Array of game objects for this team)
    $games = array();


    //stats (Associative array maping stat names to numbers)

    /*
    #Wins (integer)
    $stats[0] = "";
    #Losses (integer)
    $stats[1] = "";
    #Ties (integer)
    $stats[2] = "";
    #Win_percentage (float)
    $stats[3] = "";
    #Points_for (integer)
    $stats[4] = "";
    #points_against (integer)
    $stats[5] = "";
    #standing_score (integer)
    $stats[6] = ""
    */

    $stats = array(
      1 => $Win,
      2 => $Loss,
      3 => $Tie,
      4 => $win_pct,
      5 => $P_for,
      6 => $P_Agnst,
      7 => $Stnd_Sc);

  }

?>
