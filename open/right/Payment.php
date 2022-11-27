<?php 





class Payment{


    public function getPaymentAcount($payment){
        return new $payment();
    }   

}