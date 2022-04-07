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

  $team1_stats = new Stats(4,3,0,150,150);

  $team1 = new Team("Hawks", array() ,$team1_stats, $division);

  $team2_stats = new Stats(1,5,1,150,120);

  $team2 = new Team("Pigeons", array(), $team2_stats, $division);

  $date_time = new DateTime("2022/1/31 5pm");

  $game = new Game($date_time, $team1, 3, $team2, 2, $venue);

  print_r($game);
?>
