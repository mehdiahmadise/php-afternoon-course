<?php


abstract class Payment {

  protected $amount;

  public function __construct($amount)
  {
    $this->amount = $amount;
  }

  abstract public function processPayment();
}

class CreditCardPayment extends Payment {

  public $cardNumber;

  public function __construct($amount, $cardNumber)
  {
    parent::__construct($amount);
    $this->cardNumber = $cardNumber;
  }

  public function processPayment() {

    return "Payment: " . $this->amount . " $ with Card Number" . $this->cardNumber;
  }
}

class CashPayment extends Payment {

  public function processPayment() {
    return "Cash Payment: " . $this->amount . "$";
  }
}


class PaypalPayment extends Payment {
  public $accountEmail;

  public function __construct($amount, $accountEmail)
  {
     parent::__construct($amount);
     $this->accountEmail = $accountEmail;
  }

  public function processPayment()
  {
    return "Payment with Paypal: " . $this->amount . "$ with this Email " . $this->accountEmail;
  }
}


function pay(Payment $payment) {
  echo $payment->processPayment();
}

$creditPayment = new CreditCardPayment(1000, "123-4544-5549-6676");
pay($creditPayment);

echo "<br>";

$cashPayment = new CashPayment(5000);
pay($cashPayment);

echo "<br>";

$payPal = new PaypalPayment(2000, "mehdi@gmail.com");
pay($payPal);