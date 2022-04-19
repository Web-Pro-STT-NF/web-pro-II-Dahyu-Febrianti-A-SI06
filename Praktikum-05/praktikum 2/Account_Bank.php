<?php
require_once "Account.php";

class AccountBank extends Account{
    public $customer;
    static $biaya_admin = 6500;

    function __construct($namo, $saldo, $customer){
        parent::__construct($nomor, $saldo);
        $this->customer = $customer;
    }
    public function transfer($ab_tujuan, $uang){
        $ab_tujuan->dposit($uang);
        $this->witdrawl($uang);
        $this->witdrawl(self::$biaya_admin);
    }
    public function cetak(){
        parent::cetak();
        echo "<br/>Customer :" .$this->customer;
    }
}