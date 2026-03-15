<?php

class CronJob {
    private $schedule;

    public function __construct($schedule) {
        $this->schedule = $schedule;
    }

    public function run() {
        // Code to execute the cron job
    }
}

?>