<?php

namespace jhtimmins\ipinfo;

class Details
{
  public function __construct($raw_details)
  {
    foreach ($raw_details as $property => $value) {
      $this->$property = $value;
    }
    $this->all = $raw_details;
  }
}