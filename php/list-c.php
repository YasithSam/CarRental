<?php

function componentc($city){
    $element="
       <ul>
         <li> 
           <a href=\"edit.php?city=$city\">$city</a>
         </li>
       </ul>  
    ";
    echo $element;
}