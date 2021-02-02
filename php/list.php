<?php

function componentl($name){
    $element="
       <ul>
         <li> 
           <a href=\"edit.php?name=$name\">$name</a>
         </li>
       </ul>  
    ";
    echo $element;
}