`<?php
class hotelSelectoin{
    public $id;
    public $name;
    public $costperNight;
    private $stayLength;
    private $availRooms;
    private $fullyBooked;
    public $description;
    public $img;

    // Getters & Setters:
    
    public  function stayLength($stayLength){
        $this->stayLength = $stayLength;
    }
    public function setavailRooms($availRooms){
        $this->availRooms = $availRooms;
    }
    public  function fullyBooked($fullyBooked){
        $this->fullyBooked=$fullyBooked;
        if($fullyBooked===true){
            "Fully booked";
        }else{
            "Available";
        }
    }

    // constructor method to set all of the values:
    public function __conrtuct($id,$name,$costperNight,$stayLength,$availRooms,$fullyBooked,$description,$img){
        $this->$id=$id;
        $this->$name=$name;
        $this->$costperNight=$costperNight;
        $this->$stayLength=$stayLength;
        $this->$availRooms=$availRooms;
        $this->$fullyBooked=$fullyBooked;
        $this->$description=$description;
        $this->$img=$img;
    }

}