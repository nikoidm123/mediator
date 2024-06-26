<?php

class Customer {
    private $mediator;

    public function __construct(Mediator $mediator) {
        $this->mediator = $mediator;
    }

    public function register() {
        echo "Customer registered.\n";
        $this->mediator->notify($this, "customerRegistered");
    }

    public function sendConfirmation() {
        echo "Customer confirmation sent.\n";
    }
}
?>
