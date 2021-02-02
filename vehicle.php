<div class="column c80">
  <div class="column">
     <?php   
           
          $sql = "SELECT vehicles.vehicle_title,vehicles.owner_id,vehicles.id,Brand.name,vehicles.seats,vehicles.rating,vehicles.status,vehicles.price_per_km,vehicles.city,vehicles.vimage1 FROM vehicles,Brand where Brand.id=vehicles_brand";
          $result = $con->query($sql);
          if(mysqli_num_rows($result)>0){
               while ($row = mysqli_fetch_assoc($result)){
                    component($row['owner_id'],$row['id'],$row['vehicle_title'],$row['name'],$row['seats'],$row['rating'],$row['status'],$row['price_per_km'],$row['city'],$row['vimage1']);
               }
          }
          else{
               echo "<h5>No Vehicles</h5>";
          
         }
     
     ?>	
   </div>
</div>  