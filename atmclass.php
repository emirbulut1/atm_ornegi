<?php
class atm{
    public $bakiye;
    function __construct($bakiye){
        $this->bakiye=$bakiye;
    }
    function islem($gelen){
        if($this->bakiye<100){
            $this->parayatir($gelen);
        }
        else{
            $this->paracek($gelen);
        }
    }
    function parayatir($eklenecek){
            $this->bakiye+=$eklenecek;}
            
        
        function paracek($çekilecek){
                $this->bakiye-=$çekilecek;
            }
           
    function __destruct(){
        echo "yeni bakiye:$this->bakiye";
    }
}
$atm=new atm(1000);
$atm->islem(3);

?>