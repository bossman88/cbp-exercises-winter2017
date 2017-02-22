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
}