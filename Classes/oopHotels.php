`<?php
class hotelSelectoin{

    // proporties :
    public $Hotelname;
    public $costPernight;
    public $image;

    // constructor Method :
    public function __consrtuct($Hotelname,$costPernight,$image)
    {
        $this->Hotelname=$Hotelname;
        $this->costPernight=$costPernight;
        $this->$image=$image;
    }

    //Getters :
    public function gethotelName(){
        return $this->Hotelname;
    }
    public function getcostperNight(){
        return $this->costPernight;
    }
    public function getimage(){
        return $this->image;
    }
    
    // Methods :
    public function getTotalCost($x)
    {
       $amount =$x * $this->costPernight;
       return $amount;
    }
}