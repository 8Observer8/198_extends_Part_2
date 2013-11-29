<?php

class BankAccount {
    public $balance = 0;
    
    public $type = 0;
    
    public function setType($type) {
        $this->type = $type;
    }

    public function displayBalance() {
        return 'Balance: '.$this->balance;
    }
    
    public function withDraw($amount) {
        if ($this->balance < $amount) {
            echo 'Not enough money.<br />';
        } else {
            $this->balance = $this->balance - $amount;
        }
    }
    
    public function deposit($amount) {
        $this->balance = $this->balance + $amount;
    }
}

class SavingsAcount extends BankAccount {
    public $type = '18-25';
}

$alex = new BankAccount;
$alex->setType('Super type');
$alex->deposit(100);
$alex->withDraw(20);

$alex_savings = new SavingsAcount;
$alex_savings->deposit(300);

echo $alex->type.' has '.$alex->displayBalance().'<br />';
echo $alex_savings->type.' has '.$alex_savings->displayBalance().'<br />';

/* Output
Super type has Balance: 80
18-25 has Balance: 300
 */
?>
