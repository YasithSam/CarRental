<?php

function component($vehicle_title,$vehicles_brand,$vehicles_overview,$price_per_km,$city,$vimage1){
    $element ="
    
    
        <div class=\"example-1 card\" style=\"margin-top:20px; \">
            <div class=\"wrapper\">
            
            
                    
                    <div class=\"image\">
                        <img class=\"book-image\" src=\"$vimage1\"/>
                    </div>
                
                <div class=\"data\">
                    <div class=\"content\">
                    <span class=\"brand\" style=\"color:white\">[$vehicles_brand]</span>
                    <span class=\"brand\" style=\"color:white\">Rs. $price_per_km per day</span>
                    <br>
                    <span class=\"brand\" style=\"color:white\">From: $city </span>
                    <h1 class=\"title\"><a href=\"#\" class=\"cardTitle\">$vehicle_title</a></h1>
                    <p class=\"text\" style=\"color:white\">$vehicles_overview</p>
                    </div>
                </div>
                
            </div>
        </div>   
   
    
    ";
    echo $element;
}

