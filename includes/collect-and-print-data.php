<?php
// function collectArray(prod-id){

// }
?>
<?php

// chek if there is something in $_GET array under the key: prod-id
// if not, loop through $products and parse the datat into desired markup
$markUp = "";

// if-statement runs in case that user didn't select anything from the dropdown
if(!isset($_GET['prod-id'])){
    foreach($items as $value){
        $markUp .= "<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
                            <div class='card'>
                                <img class='card-img-top' src='{$value['prod_image']}' alt='{$value['prod_name']}' style='width:100%'>
                                <div class='card-body'>
                                    <h4 class='card-title'>{$value['prod_name']}</h4>
                                    <p class='card-text'>Price {$value['prod_price']}</p>
                                </div>
                            </div>
                        </div>";
    }
    
} else {
    
    $selectedItems = [];
    
    foreach ($items as $value) {
        if ($_GET["prod-id"] === $value["prod_code"]) {
            array_push($selectedItems, $value);
        }
    }
    
    foreach($selectedItems as $value){
        $markUp .= "<div class='col-lg-4 col-md-6 col-sm-12 col-xs-12'>
                            <div class='card'>
                                <img class='card-img-top' src='{$value['prod_image']}' alt='{$value['prod_name']}' style='width:100%'>
                                <div class='card-body'>
                                    <h4 class='card-title'>{$value['prod_name']}</h4>
                                    <p class='card-text'>Price {$value['prod_price']}</p>
                                </div>
                            </div>
                        </div>";
    }
}

?>