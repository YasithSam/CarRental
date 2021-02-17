<?php

function verticalC($vehicle_title,$rating,$price_per_km,$vimage1){
    $element ="                
        <li class=\"cards__item\">
            <div class=\"card\">
                <div class=\"card__image \" style=\"background-image: url(../CarRental/images/$vimage1);\"></div>
                <div class=\"card__content\">
                    <div class=\"card__title\">$vehicle_title</div>
                    <p class=\"card__text\" style=\"color:Blue; margin-top:1px;\"> Ratings : $rating</p>
                    <h1 class=\"card__text\" style=\"color:Red\">Just for : $price_per_km</p>
                 
                    
                </div>
            </div>
        </li>
        
    
    ";
    echo $element;
}