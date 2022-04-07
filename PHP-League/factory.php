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

  $division = new Division("Senior Boys");

  $venue = new Venue("ROC");

  $team1_stats = new Stats(4,3,0,150,150);

  $team1 = new Team("Hawks",$team1_stats, $division);

  $team2_stats = new Stats(1,5,1,150,120);

  $team2 = new Team("Pigeons", $team2_stats, $division);

  $date_time = new DateTime("2022/1/31 5pm");

  $game = new Game($date_time, $team1, 3, $team2, 2, $venue);

  $division->AddTeam($team1);
  $division->AddTeam($team2);

  $team1->AddGame($game);
  $team2->AddGame($game);

  $venue->AddGameToVenue($game);

  //print_r($game);
?>
