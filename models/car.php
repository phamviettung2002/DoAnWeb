<?php
    class Car{
        private $id;
        private $name;
        private $title;
        private $price;
        private $color;
        private $image;
        private $image1;
        private $image2;
        private $description;
        private $numberofseats;
        private $style;
        private $fuel;
        private $origin;
        private $gear;



        public function getid(){return $this->id;}
        public function getname(){return $this->name;}
        public function gettitle(){return $this->title;}
        public function getprice(){return $this->price;}
        public function getcolor(){return $this->color;}
        public function getimage(){return $this->image;}
        public function getimage1(){return $this->image1;}
        public function getimage2(){return $this->image2;}
        public function getdescription(){return $this->description;}
        public function getnumberofseats(){return $this->numberofseats;}
        public function getstyle(){return $this->style;}
        public function getfuel(){return $this->fuel;}
        public function getorigin(){return $this->origin;}
        public function getgear(){return $this->gear;}

        public function __construct ($id, $name, $title, $price, $color, $image, $image1, $image2, $description, $numberofseats, $style, $fuel, $origin, $gear){
            $this->id = $id;
            $this->name = $name;
            $this->title = $title;
            $this->price = $price;
            $this->color = $color;
            $this->image = $image;
            $this->image1 = $image1;
            $this->image2 = $image2;
            $this->description = $description;
            $this->numberofseats = $numberofseats;
            $this->style = $style;
            $this->fuel = $fuel;
            $this->origin = $origin;
            $this->gear = $gear;

        }
    }
?>