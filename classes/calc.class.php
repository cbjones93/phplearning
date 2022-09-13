<?php

class Calc
{
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $one, int $two, int $three)
    {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
    }

    public function calculator()
    {
        switch ($this->operator) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            default:
                echo "Error";
                break;
        }
    }
}

// class FirstClass {
//     const EXAMPLE = "You can't change this.";

//     public static function test() {
//         $testing = "This is a test.";
//         return $testing;
//     }
// }

// // $a = FirstClass::test();
// // echo $a;

// class SecondClass extends FirstClass {
//     public static $staticProperty = "A static property.";

//     public static function anotherTest() {
//         echo parent::EXAMPLE;
//         echo self::$staticProperty;
//     }
// }

// $b = SecondClass::anotherTest();
// echo $b;

interface PaymentInterface
{
    public function payNow();
}
interface LoginInterface
{
    public function loginFirst();
}
class Paypal implements PaymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}
class BankTransfer implements PaymentInterface, LoginInterface
{
    public function loginFirst()
    {
    }
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->loginFirst();
        $this->payNow();
    }
}
class Visa implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}
class Cash implements PaymentInterface
{
    public function payNow()
    {
    }
    public function paymentProcess()
    {
        $this->payNow();
    }
}

class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
       $paymentType->payNow();
    }
}

$paymentType = new Paypal();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);
