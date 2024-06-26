<?php

class Flight {
    private $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function bookFlight() {
        echo "Flight booked.\n";
        $this->mediator->notify($this, "flightBooked");
    }
}
?>
