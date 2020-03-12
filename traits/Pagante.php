<?php

    trait Pagante
    {
        private $paymentMethod;
        
        function reservationPayment()
        {
            $totalPayment = $reservation->getTotal();
            $this->$paymentMethod->executePayment($totalPayment);
        }
    }
    