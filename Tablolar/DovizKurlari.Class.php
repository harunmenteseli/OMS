<?php

class DovizKurlari {

    private $tcmb = "https://www.tcmb.gov.tr/kurlar/today.xml";
    private $conn;

    public $tl;

    public $dolar_alis;
    public $dolar_satis;

    public $euro_alis;
    public $euro_satis;

    public $pound_alis;
    public $pound_satis;

    public $ruble_alis;
    public $ruble_satis;

    public $aud_alis;
    public $aud_satis;

    public $dkk_alis;
    public $dkk_satis;

    public $chf_alis;
    public $chf_satis;

    public $sek_alis;
    public $sek_satis;



    public function __construct(){
        $this->conn = simplexml_load_file($this->tcmb);
        $this->TL_Data();
        $this->USD_Data();
        $this->EUR_Data();
 $this->POUND_Data();
$this->RUBLE_Data();
$this->AUD_Data();
$this->DKK_Data();
$this->CHF_Data();
$this->SEK_Data();
    }
  public function TL_Data(){
        $this->tl  = 1;
    }
    public function USD_Data(){
        $this->dolar_alis  = $this->conn->Currency[0]->ForexBuying;
        $this->dolar_satis = $this->conn->Currency[0]->ForexSelling;
    }

    public function EUR_Data(){
        $this->euro_alis  = $this->conn->Currency[3]->ForexBuying;
        $this->euro_satis = $this->conn->Currency[3]->ForexSelling;
    }

    public function POUND_Data(){
        $this->pound_alis  = $this->conn->Currency[4]->ForexBuying;
        $this->pound_satis = $this->conn->Currency[4]->ForexSelling;
    }
    public function RUBLE_Data(){
        $this->ruble_alis  = $this->conn->Currency[14]->ForexBuying;
        $this->ruble_satis = $this->conn->Currency[14]->ForexSelling;
    }
  public function AUD_Data(){
        $this->aud_alis  = $this->conn->Currency[1]->ForexBuying;
        $this->aud_satis = $this->conn->Currency[1]->ForexSelling;
    }
  public function DKK_Data(){
        $this->dkk_alis  = $this->conn->Currency[2]->ForexBuying;
        $this->dkk_satis = $this->conn->Currency[2]->ForexSelling;
    }
  public function CHF_Data(){
        $this->chf_alis  = $this->conn->Currency[5]->ForexBuying;
        $this->chf_satis = $this->conn->Currency[5]->ForexSelling;
    }
  public function SEK_Data(){
        $this->sek_alis  = $this->conn->Currency[6]->ForexBuying;
        $this->sek_satis = $this->conn->Currency[6]->ForexSelling;
    }



}

?>
