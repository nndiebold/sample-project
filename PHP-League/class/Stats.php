
<?php

  class Stats {

    private int $wins;

    private int $losses;

    private int $ties;

    private float $win_percentage;

    private int $points_for;

    private int $points_against;

    private int $standing_score;

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
