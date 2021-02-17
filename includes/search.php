<div class="column c20"> 
   <div class="row">  
     <form class="widget" action="../CarRental/results.php" method="POST">
  
          <p class="filter_head"> Filter Vehicles</p>
          
          <div class="select">
               <select aria-label="Select menu example" id="brand" name="brand">
               <?php    
                    $sql = "SELECT name FROM Brand";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                         ?>
                         <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                     
                         <?php
                         } 
                    ?>
               </select>
          </div>
          
          <div class="select">
               <select aria-label="Select menu example" id="city" name="city">
               <?php    
                    $sql = "SELECT Distinct city FROM vehicles";
                    $result = $con->query($sql);
                    while ($row = mysqli_fetch_assoc($result)){ 
                         ?>
                         <option value="<?php echo $row['city'];?>"><?php echo $row['city'];?></option>
                     
                         <?php
                         } 
                    ?>
               </select>

          </div>
          <div class="select">
               <select aria-label="Select menu example" id="status" name="status">
               <?php    
                    $sql = "SELECT Distinct status FROM vehicles";
                    $result = $con->query($sql);
                  
                    while ($row = mysqli_fetch_assoc($result)){ 
                         if($row['status']==0){
                              $a="Not available";
                         }
                         else{
                              $a="Available";
                         }
                         ?>
                          <?php echo print_r($row);?>  
                         <option value="<?php echo $a;?>"><?php echo $a;?></option>
                     
                         <?php
                         } 
                    ?>
               </select>

          </div>
          <br />
          <button class="button" type="submit" id="button">Search Car</button>
     </form>
   </div>

</div>  