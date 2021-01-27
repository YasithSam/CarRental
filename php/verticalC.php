<?php

function verticalC($vehicle_title,$vehicles_overview,$vimage1){
    $element ="              
        
        <li class=\"cards__item\">
            <div class=\"card\">
                <div class=\"card__image \" style=\"background-image: url(https://unsplash.it/800/600?image=82);\"></div>
                <div class=\"card__content\">
                    <div class=\"card__title\">$vehicle_title</div>
                    <p class=\"card__text\">$vehicles_overview</p>
                    <button class=\"btn btn--block card__btn\">View</button>
                </div>
            </div>
        </li>
        
    
    ";
    echo $element;
}