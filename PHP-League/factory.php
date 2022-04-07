<!--
Work log
Created on 4/05/22

-->

<?php
  require("class/Division.php");
  require("class/Game.php");
  require("class/Stats.php");
  require("class/Team.php");
  require("class/Venue.php");

  spl_autoload_register();

  $division = new Division("Senior Boys", array());

  $venue = new Venue("ROC", array());

  $team1_stats = new Stats(4,3,0,4/7,150,150,(4*2)+(3*0)+(0*1));

  $team1 = new Team("Hawks", array() ,$team1_stats, $division);

  $team2_stats = new Stats(1,5,1,1/5,150,120,(1*2)+(5*0)+(1*1));

  $team2 = new Team("Pigeons", array(), $team2_stats, $division);

  $date_time = new DateTime("2022/1/31 5pm");

  $game = new Game($date_time, $team1, 3, $team2, 2, $venue);

  print_r($game);
?>
