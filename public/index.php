<?php

use \Class\Enum\ReservationStatus;
use \Class\Reservation;

require_once ('../vendor/autoload.php');

//pour récupérer une constante, on n'a pas besoin d'instancier la class
//on utilise directement le nom de la class suivi de :: et de la constante

//echo Reservation::APPROVAL_PENDING; //affiche en "attente"

$status = 'en attente';

//if($status == Reservation::APPROVAL_PENDING) echo 'il faut attendre';
$reservation = new Reservation();
var_dump($reservation);
if(ReservationStatus::APPROVAL_PENDING == $reservation->status) echo 'il faut attendre';