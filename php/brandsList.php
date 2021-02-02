<div class="container-fluid">
              <div class="row" style="margin: 50px 10px 0px 5px;">
               
                <div class="column">
                  <div class="serviceBox">
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=1";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Cars</p>
                       
                  </div>    
                </div>

                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=2";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Vans</p>
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=3";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Motor-Bikes</p>
                            
                       
                  </div>    
                </div>
                
                <div class="column">
                  <div class="serviceBox">
                     
                        <?php 
                            $sql = "SELECT COUNT(*) AS Count FROM vehicles where vehicles_brand=4";
                            $result = $con->query($sql);
                            $row = $result->fetch_assoc();
                            
                        ?>
                        
                            <h3 class="count"><?php  echo $row['Count'];?></h3>
                            <h4><p class="title">Tuk Tuk</p>
                           
                       
                  </div>    
                </div>
             </div>
</div> 