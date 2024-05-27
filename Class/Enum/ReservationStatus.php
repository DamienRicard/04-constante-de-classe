<?php

namespace Class\Enum;

enum ReservationStatus
{
  //on va déclarer nos constantes
  case APPROVAL_PENDING;
  case APPROVAL_APPROVED;
  case APPROVAL_DENIED;
}