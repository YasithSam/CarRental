<?php

function component($owner_id,$id,$vehicle_title,$vehicles_brand,$seats,$rating,$status,$price_per_km,$city,$vimage1){
    if($status==0){
        $status="Booked";
        $color="red";
    }else{
        $status="Available";
        $color="green";
    }
    $element ="
    
    <form action=\"./book.php\" method=\"post\" class=\"example-1 card\" style=\"width:100%\">
        <div class=\"example-1 card\" style=\"margin-top:20px; \">
            <div class=\"wrapper\">
            
            
                    
                    <div class=\"image\">
                        <img class=\"book-image\" src=\"../CarRental/images/$vimage1\"/>
                    </div>
                
                <div class=\"data\">
                    <div class=\"content\">
                    <input name=\"title\" id=\"title\" type=\"hidden\" value=\"$vehicle_title\"/>
                    <input name=\"owid\" type=\"hidden\" value=\"$owner_id\"/>
                    <input name=\"id\" type=\"hidden\" value=\"$id\"/>
                    <span class=\"brand\" style=\"color:white\">[$vehicles_brand]</span>
                    <span class=\"brand\" style=\"color:white\">Rs. $price_per_km per day</span>
                    <br>
                    <span class=\"brand\" style=\"color:white\">From: $city </span>
                    <h1 class=\"title\"><a href=\"#\" class=\"cardTitle\">$vehicle_title</a></h1>
                    <p class=\"text1\" style=\"color:white\">Seats : $seats</p>
                    <p class=\"text1\" style=\"color:yellow\">Rating : $rating</p>
                    <p class=\"text1\" style=\"color:$color\">Status : $status</p>
                    <input type=\"submit\" id=\"button\" value=\"Book\" class=\"login-button\">

                    </div>
                </div>
                
            </div>
        </div>   
    </form>
    
    ";
    echo $element;
}

