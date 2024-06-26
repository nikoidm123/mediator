<?php

class Booking {
    private $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function confirmBooking() {
        echo "Booking confirmed.\n";
    }
}
?>
