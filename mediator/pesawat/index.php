<?php

require_once 'Mediator.php';
require_once 'BookingMediator.php';
require_once 'Flight.php';
require_once 'Customer.php';
require_once 'Booking.php';

$mediator = new BookingMediator();

$flight = new Flight($mediator);
$customer = new Customer($mediator);
$booking = new Booking($mediator);

$mediator->setFlight($flight);
$mediator->setCustomer($customer);
$mediator->setBooking($booking);

ob_start(); 

$customer->register();
flush(); 

$flight->bookFlight();
flush(); 

ob_end_flush(); 

?>
