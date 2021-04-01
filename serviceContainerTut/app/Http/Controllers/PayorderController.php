<?php

namespace App\Http\Controllers;

use App\Orders\Oderdetails;
use Illuminate\Http\Request;
use App\Billing\PaymentGatewayContract;

class PayorderController extends Controller
{
    public function store(Oderdetails $orderdetail, PaymentGatewayContract  $paymentGateway){
        $order = $orderdetail->all();
        dd($paymentGateway->charge(2500));
    }
}
