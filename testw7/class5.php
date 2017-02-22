<?php

require 'class3.php';

$shipping = new address();


class delivery
{
    public $address = null;
    public $is_sent = false;
    public $sent_at = null;
    public $is_delivered = false;
    public $delivered_at = null;

 

    public function __construct($shipping){
        $shippping = $this ->address;
        
    }

    public function getPrice(){
        $local = $shipping::isLocal;
        if($local){
            return 0;
        }else {
            return 8.99;
        }
    }

    public function is_sent(){
      $this -> is_sent = true;   
        $this -> sent_at = date("l jS \of F Y h:i:s A");
    }

    public function delivered(){
        $this->is_delivered = true;
        $this -> delivered_at = date("l jS \of F Y h:i:s A");
    }
}

