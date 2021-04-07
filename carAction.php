
<?php require_once 'car.php';
session_start();

$registrationNumber;
$dateCirculation;
$mileage;
$model;
$brand;
$color;
$weight;
$rented = false;
$id = 0;




//The model is Audi she is automatically reserved otherwise she is free

if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $rented = true;
        
        header("location: index.php");
       
}
    
    



//The vehicle is a utility or commercial depending on its weight (> 3.5 tonnes)
function typeOfveihicle(){
    
}


//The car or proviens country is Belgium, France or Germany if imatriculation starts BE, FR,DE
function carCountry(){
    
}


//Determine if it has been used a lot low < 100.000or middle > 100.000or hight > 200.000according to the mileage
function carUsage(){
    
}


//Calculate the number of years since the date of circulation
function carYearsCirculation(){
}












?>
