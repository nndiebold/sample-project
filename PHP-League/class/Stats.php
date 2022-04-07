
<?php

  class Stats {

    private $wins;

    private $losses;

    private $ties;

    private $win_percentage;

    private $points_for;

    private $points_against;

    private $standing_score;

    public function __construct (
      int $wins = 0,
      int $losses = 0,
      int $ties = 0,
      float $win_percentage = 0.0,
      int $points_for = 0,
      int $points_against = 0,
      int $standing_score = 0)
      {
        $this->wins = $wins;
        $this->losses = $losses;
        $this->ties = $ties;
        $this->win_percentage = $win_percentage;
        $this->points_for = $points_for;
        $this->points_against = $points_against;
        $this->standing_score = $standing_score;
      }

  }


?>
