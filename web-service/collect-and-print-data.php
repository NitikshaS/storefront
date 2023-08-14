<?php
// create the function collectArray.
// (this function contains the parameter 
// that defines the required product-type) 
// make the $data array available within this function 

function collectArray($type) {
    global $data;
    $collect = [];

// check if $data array has any elements 
   
    // if the match is found,  
        // use array_push() to push the 
        // fitting product into $collect array.
    // close loop


    // If the size of $collect is greater than 0
        // return $collect.
   


    if(count($data)>0) {
        foreach($data as $oneProduct) {
          if($oneProduct['type'] === $type) {
                array_push($collect, $oneProduct);
          }
        }
    } 

    if(count($collect)>0) {
        return $collect;
    }
}
        


// create function printHTML



function printHTML() {
    global $data;
    
    if(isset($_GET['type'])) {
        $collectedData = collectArray($_GET['type']);
    } else {
        $collectedData = $data;
    }

if(is_countable($collectedData) && count($collectedData)>0) {
    foreach($collectedData as $finalProduct) {
        echo '<div id="single" class="col-12 col-sm-12 col-md-6 col-lg-3">';
        echo '<img src="'.$finalProduct['imgURL'].'" alt="'.$finalProduct['imgALT'].'">';
        echo '<p class="prodname">'.$finalProduct['name'].'</p>';
        echo '<p class="prodprice">'.$finalProduct['price'].'</p>';
        echo '</div>';
    }
} else {
    echo "No such product in our store!";
}
}  
 
 
?>