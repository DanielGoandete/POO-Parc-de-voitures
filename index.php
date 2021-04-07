<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
  

<body>
<?php require_once 'carAction.php';?>
  <div class="container-md">
  		 <div class="row justify-content-center"> 
  		
  		 	<form action="carAction.php" method="POST">
  		 	
                <table class="table">
                    <thead>
                        <tr>
                             <th>Cars</th>
                             <th>Date of Circulation</th>
                             <th>Mileage</th>
                             <th>model</th>
                             <th>brand</th>
                             <th>color</th>
                             <th>weight</th>
    
                             
                            
                        </tr>
                    </thead>
                    
                            <tr>
                                <input type="hidden" name="id" value="1"/>
                                <td><img width="200" height="150" src="assets/audi.jpg"></td>
                                <td>2022</td>
                                <td>0 km</td>
                                <td>Audi xr</td>
                                <td>Audi</td>
                                <td>Black</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group"> 
                            			<button type="submit" id="1"  class="btn btn-primary" name="rent1">Rent</button>    
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <input type="hidden" name="id" value="2"/>
                                <td><img width="200" height="150" src="assets/ferrari.jpg"></td>
                                <td>2020</td>
                                <td>1000 km</td>
                                <td>Ferrari r32</td>
                                <td>Ferrari</td>
                                <td>Gray</td>
                                <td>1000 kg</td>
                                <td>
                                    
                                	<div class="form-group">   
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="booked">Booked</button>
                        					teste
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="rent2">Rent</button>
                            				teste2
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><img width="200" height="150" src="assets/fusca.jpg"></td>
                                <td>1976</td>
                                <td>400,00 km</td>
                                <td>Fusca</td>
                                <td>wosvagem</td>
                                <td>Red</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><img width="200" height="150" src="assets/caminhao.jpg"></td>
                                <td>2017</td>
                                <td>300 km</td>
                                <td>Caminhao power</td>
                                <td>Caminhao</td>
                                <td>White</td>
                                <td>4000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                               <td><img width="200" height="150" src="assets/audi2.jpg"></td>
                               <td>1900</td>
                                <td>500.00 km</td>
                                <td>Audi 2</td>
                                <td>Audi</td>
                                <td>Brown</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group">    
                                	
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="booked">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="rent">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><img width="200" height="150" src="assets/porche.jpg"></td>
                               <td>2021</td>
                                <td>10 km</td>
                                <td>porche z</td>
                                <td>porche</td>
                                <td>Black</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><img width="200" height="150" src="assets/punto.jpg"></td>
                                <td>2014</td>
                                <td>57,00 km</td>
                                <td>punto turbo</td>
                                <td>Fiat</td>
                                <td>Red</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                 <td><img width="200" height="150" src="assets/range-rover-evoque.jpg"></td>
                                <td>2023</td>
                                <td>0 km</td>
                                <td>Range Rover Evoque</td>
                                <td>Range Rover</td>
                                <td>Blue</td>
                                <td>1000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                            <tr>
                                <td><img width="200" height="150" src="assets/van.png"></td>
                                <td>2019</td>
                                <td>300 km</td>
                                <td>Van</td>
                                <td>Fiat</td>
                                <td>Yellow</td>
                                <td>3000 kg</td>
                                <td>
                                	<div class="form-group">    
                    					<?php if($rented == true): ?>
                        					<button type="submit"  class="btn btn-danger" name="update">Booked</button>
                        				<?php else: ?>
                            				<button type="submit"  class="btn btn-primary" name="save">Rent</button>
                        				<?php endif; ?>     
                					</div>
                                </td> 
                                
                            </tr>
                        
                </table>
    	</form>
    </div>
                         
   </div> 
</body>
</html>
