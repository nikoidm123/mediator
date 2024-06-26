<?php

class BookingMediator implements Mediator {
    private $flight;
    private $customer;
    private $booking;

    public function setFlight(Flight $flight) {
        $this->flight = $flight;
    }

    public function setCustomer(Customer $customer) {
        $this->customer = $customer;
    }

    public function setBooking(Booking $booking) {
        $this->booking = $booking;
    }

    public function notify($sender, $event) {
        if ($event == "flightBooked") {
            $this->booking->confirmBooking();
        }
        if ($event == "customerRegistered") {
            $this->customer->sendConfirmation();
        }
    }
}
?>
