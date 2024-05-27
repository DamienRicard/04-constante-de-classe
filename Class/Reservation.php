<?php

namespace Class;

use \Class\Enum\ReservationStatus;

class Reservation
{
public ReservationStatus $status;
public function __construct()
{
  $this->status = ReservationStatus::APPROVAL_PENDING;
}
  }