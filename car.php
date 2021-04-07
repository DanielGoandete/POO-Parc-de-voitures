<?php
     
 class Car {
    
public $registrationNumber;
public $dateCirculation;
public $mileage;
public $model;
public $brand;
public $color;
public $weight;


    public function car_constructor( $registrationNumber,$dateCirculation,$mileage,$model,$brand,$color,$weight){
        $this ->registrationNumber= $registrationNumber;
        $this ->dateCirculation= $dateCirculation;
        $this ->mileage= $mileage;
        $this ->model= $model;
        $this ->brand= $brand;
        $this ->color= $color;
        $this ->weight= $weight;
        
    }



}





?>