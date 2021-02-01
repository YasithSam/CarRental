<?php

function ComponentB($id,$start,$end,$day){
    $element ="     
     <form action='delete-b.php' method='post'>           
        <div class='book'>
              <div class='title'>$id</div>
              <div class='synop'>From :$start</div>
              <div class='synop'>From :$end</div>
              <div class='details'>
                <div class='fa fa-heart'></div>
                $day
              </div>
              <br />
              <input type=\"hidden\" name=\"del\" value=\"$id\" />
              <input type=\"submit\" id=\"button\" value=\"Delete\" class=\"login-button\">
             
            </div>
            
            </div>
        </form>   
    
    ";
    echo $element;
}