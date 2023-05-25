<?php

    // Include the header
    include 'header.php';

  class Account {
  
    // Properties
    public $balance;
    
     // Constructor
    public function __construct($amount) {
      $this->balance = $amount;
    }
  
    // Methods
    public function withdraw($amount) {
      if($amount > 0 && $amount < $this->balance ){
        echo "Withdraw Successfully" . "<br>";;
        $this->balance = $this->balance - $amount;
      } else {
        echo "Invalid amount" . "<br>";;
      }
    }
  
    public function deposit($amount) {
      $this->$balance = $this->$balance + $amount;
      echo "Deposited Successfully" . "<br>";;
    }
    
    public function check_balance() {
      echo "Your account's balance is: " . $this->balance . "<br>";;
    }
  
  }
  
  // Usage
  $acc = new Account(500);
  $acc->Withdraw(100);
  echo $acc->check_balance();

  // Include the footer
  include 'footer.php';

?>
