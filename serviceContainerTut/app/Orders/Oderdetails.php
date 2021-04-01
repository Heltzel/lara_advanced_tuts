<?php

namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class Oderdetails
{
  private $paymentgateway;

  public function __construct(PaymentGatewayContract $paymentgateway){
    $this->paymentgateway = $paymentgateway;
  }

  public function all(){
    $this->paymentgateway->setDiscount(500);
    return [
      "name" => "Victor",
      "address" => "21 Jumpstreet"
    ];
  }
}
